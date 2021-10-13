<?php

namespace App\Models;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GenderController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $name
 * @property string $edition
 * @property string $publishing_company
 * @property string|null $publication_date
 * @property string|null $description
 * @property int $is_hard_covered
 * @property float $price
 * @property int $author_id
 * @property int $gender_id
 * @property int $color_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereEdition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsHardCovered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublishingCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'edition',
        'publishing_company',
        'publication_date',
        'description',
        'is_hard_covered',
        'price',
        'author_id',
        'gender_id',
        'color_id'
    ];

//    protected $appends = [
//      "author"
//    ];

    protected $appendColumns = [
        "author_first_name",
        "author_last_name",
        "author_nationality",
        "author_birth_date",
        "gender_gender",
        "color_name",
        "color_code"
    ];

    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class);
    }

    public function color(): HasOne
    {
        return $this->hasOne(Color::class);
    }
//
//    public function getAppends(): array
//    {
//        return $this->appends;
//    }
//
//    public function getAppendColumns(): array
//    {
//        return $this->appendColumns;
//    }
//
//    public function getAuthorAttribute()
//    {
//        return (new AuthorController)->getAuthorData($this->author_id);
//    }
//
//    public function getGenderAttribute(): array
//    {
//        return (new GenderController)->getAppendedData($this->gender_id, $this->getAppends(), $this->getAppendColumns());
//    }
//
//    public function getColorAttribute(): array
//    {
//        return (new ColorController)->getAppendedData($this->color_id, $this->getAppends(), $this->getAppendColumns());
//    }
}
