<?php

namespace App\Exports;

use App\detail;
use App\kegiatan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class detailExport implements FromView
{
  
    public function view(): View
    {
        return view('Laporan.keuangan',[
            'data_detail'=>detail::all(),
            'jumlah_perolehan'=>detail::all()
        ]);
    }

}
