<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'ISBN' => $this->ISBN,
            'copias_totales' => $this->copias_totales,
            'copias_disponibles' => $this->copias_disponibles,
            'disponible' => $this->disponible,
        ];
    }
}
