<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class KhorochMembersTest extends TestCase
{
    use RefreshDatabase;

    public function test_khoroch_members_table_init(): void
    {
        // Name of the table you want to check
        $tableName = 'khoroch_members';

        // Check if the table exists in the database
        $tableExists = Schema::hasTable($tableName);

        // Assert that the table exists
        $this->assertTrue($tableExists, "The table '$tableName' does exist.");
        $this->assertTrue(Schema::hasColumn($tableName, 'id'));
        $this->assertTrue(Schema::hasColumn($tableName, 'khoroch_id'));
        $this->assertTrue(Schema::hasColumn($tableName, 'user_id'));
    }

}
