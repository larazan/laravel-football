<?php

namespace App\Exports;

use App\Models\Player;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportPlayer implements FromView
{
    private $data;

    /**
	 * Create a new exporter instance.
	 *
	 * @param array $results query result
	 *
	 * @return void
	 */
	public function __construct($results)
	{
		$this->data = $results;
	}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        return view(
            'admin.reports.exports.player_xlsx',
            [ 'players' => $this->data ]
        );
    }
}
