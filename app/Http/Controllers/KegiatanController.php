<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Kegiatan_Model;
use DB;
use Auth;
use PDF;

class KegiatanController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $datas = Kegiatan_Model::orderBy('id','DESC')->paginate(5);

    return view('kegiatan.index_kegiatan', compact('datas'));

  }

  public function create()
  {
    return view('kegiatan.create_kegiatan');
  }
  public function store(Request $request)
  {
    if($request->file('foto_k')) {
      $file = $request->file('foto_k');
      $fileName  = time()."_".$file->getClientOriginalName();
      $request->file('foto_k')->move("images/kegiatan", $fileName);
      $foto = $fileName;

    } else {
      $foto = NULL;
    }
    Kegiatan_Model::create([
      'destinasi' => Request('destinasi'),
      'acara' => Request('acara'),
      'penyelenggara' => Request('penyelenggara'),
      'tanggal' => Request('tanggal'),
      'p_lokal' =>Request('p_lokal'),
      'p_mancanegara' => Request('p_mancanegara'),
      'total_pengunjung' => Request('total_pengunjung'),
      'parkiran' => Request('parkiran'),
      'pengunjung' => Request('pengunjung'),
      'lokasi' => Request('lokasi'),
      'keterangan' => Request('keterangan'),
      'foto_k' => $foto,
      'video_k' => Request('video_k')
    ]);

    return redirect()->route('kegiatan')->with(['success' => 'Gambar Telah Di-upload']);;
  }

  public function show($id)
  {

    $data = Kegiatan_Model::where('id',$id)->get();
    return view('kegiatan.show_kegiatan', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $update = Kegiatan_Model::where('id', $id)->first();
    $update->destinasi = $request['destinasi'];
    $update->acara = $request['acara'];
    $update->penyelenggara = $request['penyelenggara'];
    $update->tanggal = $request['tanggal'];
    $update->p_lokal = $request['p_lokal'];
    $update->p_mancanegara = $request['p_mancanegara'];
    $update->total_pengunjung = $request['total_pengunjung'];
    $update->parkiran = $request['parkiran'];
    $update->pengunjung = $request['pengunjung'];
    $update->lokasi = $request['lokasi'];
    $update->keterangan = $request['keterangan'];


    if($request->file('foto_k'))
    {
      $update->foto_k = $request['foto_k'];
      $file       = $request->file('foto_k');
      $fileName   = $file->getClientOriginalName();
      $request->file('foto_k')->move("images/kegiatan", $fileName);
      $update->foto_k = $fileName;
    }

    $update->update();
    return redirect()->route('kegiatan');
  }

  public function delete($id)
  {
    Kegiatan_Model::where('id',$id)->delete();
    return redirect()->route('kegiatan');
  }

  public function cetakPdf(Request $request, $id)
  {
    $datas = Kegiatan_Model::where('id',$id)->get();

    $pdf = PDF::loadView('cetak.pdf_kegiatan', compact('datas'));
    return $pdf->download('laporan data kunjungan '.date('Y-m-d_H-i-s').'.pdf');
  }

  public function rekapPdf(Request $request)
  {
    $start = Request('tgl_awal');
    $end = Request('tgl_akhir');
    if ($request->get('rekap_data'))

    {
      $datas= Kegiatan_Model::whereBetween('tanggal', [$start, $end])->get();
    }else {
      $datas= Kegiatan_Model::all();
    }

    $pdf = PDF::loadView('cetak.rekap_kegiatan', compact('datas'));
    return $pdf->stream('laporan data kunjungan '.date('Y-m-d_H-i-s').'.pdf');
  }

  // $datas= Kegiatan_Model::whereBetween('tanggal', ['2019-08-14', '2019-09-04'])->get();
  // $datas= Kegiatan_Model::whereBetween('tanggal', ['2019/08/14', '2019/09/4'])->get();
  // $datas = Kegiatan_Model::whereBetween(DB::raw('tanggal(rekap_data)'), array('tgl_awal', 'tgl_akhir'))->get();

  public function cari(Request $request)
  {
    $cari = $request->cari;

    $datas = Kegiatan_Model::where('destinasi','like',"%".$cari."%")
    ->orwhere('acara','like',"%".$cari."%")
    ->orwhere('penyelenggara','like',"%".$cari."%")->paginate(5);

    return view('kegiatan.index_kegiatan', compact('datas'));
  }

  // public function rekapPdf(Request $request)
  //   {
  //     $q = Kegiatan_Model::query();
  //     if ($request->get('tanggal'))
  //     {
  //       if($request->get('tanggal') == 'tanggal_awal') {
  //           $q->where('tanggal', 'tanggal_awal');
  //       } else {
  //           $q->where('tanggal', 'tanggal_akhir');
  //       }
  //     }
  //     $datas = $q->get();
  //
  //     $pdf = PDF::loadView('cetak.rekap_kegiatan', compact('datas'));
  //     return $pdf->download('laporan data kunjungan '.date('Y-m-d_H-i-s').'.pdf');
  //   }

}
