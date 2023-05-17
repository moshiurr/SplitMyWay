<?php

namespace Tests\Unit;

use App\Models\Khoroch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class KhorochTest extends TestCase
{

    use RefreshDatabase;

    public function test_khoroch_table_init(): void
    {
        // Name of the table you want to check
        $tableName = 'khoroches';

        // Check if the table exists in the database
        $tableExists = Schema::hasTable($tableName);

        // Assert that the table exists
        $this->assertTrue($tableExists, "The table '$tableName' does exist.");
        $this->assertTrue(Schema::hasColumn($tableName, 'id'));
        $this->assertTrue(Schema::hasColumn($tableName, 'name'));
        $this->assertTrue(Schema::hasColumn($tableName, 'image'));
    }

    public function test_khoroch_model(): void
    {
        $khoroch = Khoroch::create([
           'name' => 'test'
        ]);
        Khoroch::create([
            'name' => 'test2',
            'image' => 'test.jpg'
        ]);

        $this->assertDatabaseHas('khoroches', [
            'name' => 'test'
        ]);
        $this->assertEquals('test', $khoroch->name);
        $this->assertNull($khoroch->image);

        $this->assertDatabaseHas('khoroches', [
            'name' => 'test2',
            'image' => 'test.jpg'
        ]);
    }
}
