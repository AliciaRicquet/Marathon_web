<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model {
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        "id",
        "nom",
        "resume",
        "langue",
        "note",
        "statut",
        "premiere",
        "genre",
        "urlImage",
        "avis",
        "urlAvis",
    ];

    public $timestamps = false;

    public function episodes() {
        return $this->hasMany(Episode::class, "serie_id");
    }
    // A serie has many comments
    public function comments() {
        return $this->hasMany(Comment::class, "serie_id");
    }

    public function nbEpisodes() {
        return $this->episodes()->count();
    }

    public function nbSaisons() {
        return $this->episodes->max('saison');
    }

}
