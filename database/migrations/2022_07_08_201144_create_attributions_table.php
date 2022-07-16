<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Event;
use App\Models\MarshalPost;
use App\Models\Team;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MarshalPost::class)->constrained();
            $table->foreignIdFor(Team::class)->constrained();
            $table->foreignIdFor(Event::class)->constrained();
            $table->date('day')->nullable(false);
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
        Schema::dropIfExists('attributions');
    }
};
