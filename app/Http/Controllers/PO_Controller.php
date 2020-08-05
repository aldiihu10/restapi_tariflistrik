<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Pemuda_Olahraga_Model;
use Session;
use DB;
use Auth;
use PDF;

class PO_Controller extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $datas = Pemuda_Olahraga_Model::orderBy('id','DESC')->paginate(5);
        return view('pemuda_olahraga.index_po', compact('datas'));
    }

    public function create()
    {
      return view('pemuda_olahraga.create_po');

    }

    public function store(Request $request)
    {
      if($request->file('ft_kegiatan')) {
            $file = $request->file('ft_kegiatan');
            $fileName  = time()."_".$file->getClientOriginalName();
            $request->file('ft_kegiatan')->move("images/pemuda_olahraga", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }
      $pemuda = Pemuda_Olahraga_Model::create([
                'tanggal' => Request('tanggal'),
                'jenis_lomba' => Request('jenis_lomba'),
                'emas' => Request('emas'),
                'perak' => Request('perak'),
                'perunggu' =>Request('perunggu'),
                'piagam' => Request('piagam'),
                'jumlah_prestasi' => Request('jumlah_prestasi'),
                'ft_kegiatan' => $foto
            ]);
                Session::flash('message', 'Berhasil diubah!');
                Session::flash('message_type', 'success');
            return redirect()->route('pemuda_olahraga');
    }

    public function show($id)
    {
      $data = Pemuda_Olahraga_Model::where('id',$id)->get();
        return view('pemuda_olahraga.show_po', compact('data'));
    }

    public function update(Request $request, $id)
        {
            $update = Pemuda_Olahraga_Model::where('id', $id)->first();
            $update->tanggal = $request['tanggal'];
            $update->jenis_lomba = $request['jenis_lomba'];
            $update->emas = $request['emas'];
            $update->perak = $request['perak'];
            $update->perunggu = $request['perunggu'];
            $update->piagam = $request['piagam'];
            $update->jumlah_prestasi = $request['jumlah_prestasi'];


            if($request->file('ft_kegiatan'))
            {
                $update->ft_kegiatan = $request['ft_kegiatan'];
                $file       = $request->file('ft_kegiatan');
                $fileName   = $file->getClientOriginalName();
                $request->file('ft_kegiatan')->move("images/pemuda_olahraga", $fileName);
                $update->ft_kegiatan = $fileName;
            }

            $update->update();
            return redirect()->route('pemuda_olahraga');
        }

    public function delete($id)
    {
      Pemuda_Olahraga_Model::where('id',$id)->delete();
      return redirect()->route('pemuda_olahraga');
    }

    public function cetakPdf(Request $request, $id)
      {
        $datas = Pemuda_Olahraga_Model::where('id',$id)->get();

        $pdf = PDF::loadView('cetak.pdf_po', compact('datas'));
        return $pdf->download('laporan data prestasi '.date('Y-m-d_H-i-s').'.pdf');
      }

      public function rekapPdf(Request $request)
        {
          $start = Request('tgl-awal');
          $end = Request('tgl-akhir');
          if ($request->get('rekap-data'))

          {
            $datas= Pemuda_Olahraga_Model::whereBetween('tanggal', [$start, $end])->get();
          }else {
            $datas= Pemuda_Olahraga_Model::all();
          }

          $pdf = PDF::loadView('cetak.rekap_po', compact('datas'));
          return $pdf->stream('laporan data prestasi '.date('Y-m-d_H-i-s').'.pdf');
        }

        public function cari(Request $request)
      	{
      		$cari = $request->cari;

      		$datas = Pemuda_Olahraga_Model::where('jenis_lomba','like',"%".$cari."%")->paginate(5);

      		return view('pemuda_olahraga.index_po', compact('datas'));
      	}
}
