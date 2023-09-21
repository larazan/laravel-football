<?php

namespace App\Exports;

use App\Models\Player;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportPlayer implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;
    // private $data;

    /**
	 * Create a new exporter instance.
	 *
	 * @param array $results query result
	 *
	 * @return void
	 */
	// public function __construct($results)
	// {
	// 	$this->data = $results;
	// }

    public function map($player) : array
    {
        return [
            $player->id,
            $player->name,
            $player->club->name,
            $player->height,
            $player->weight,
            $player->status,
        ];
    }

    public function headings(): array
    {
        return [
            '#ID',
            'Player Name',
            'Club',
            'Height',
            'Weight',
            'Status',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Player::with('club:id,name')->orderBy('id', 'asc');
    }
}
