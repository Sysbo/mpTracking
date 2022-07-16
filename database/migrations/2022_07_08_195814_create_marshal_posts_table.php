<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Track;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marshal_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Track::class)->constrained();
            $table->char('number');
            $table->char('lat');
            $table->char('long');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marshal_posts');
    }
};
