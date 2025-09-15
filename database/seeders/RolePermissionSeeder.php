<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions for all levels
        $permissions = [
            // School Level Permissions
            'manage school', 'view school', 'create school', 'edit school', 'delete school',
            
            // Zonal Level Permissions
            'manage zonal', 'view zonal', 'create zonal', 'edit zonal', 'delete zonal',
            'view zonal schools', 'manage zonal schools', 'generate zonal reports',
            
            // Provincial Level Permissions
            'manage provincial', 'view provincial', 'create provincial', 'edit provincial', 'delete provincial',
            'view provincial zones', 'manage provincial zones', 'generate provincial reports',
            
            // Ministry Level Permissions
            'manage ministry', 'view ministry', 'create ministry', 'edit ministry', 'delete ministry',
            'view all schools', 'manage all schools', 'generate national reports', 'manage education policies',
            
            // Common Permissions
            'view dashboard', 'manage users', 'manage roles', 'view reports', 'export data',
            
            // Student Management
            'view students', 'create students', 'edit students', 'delete students', 'manage student transfers',
            
            // Teacher Management
            'view teachers', 'create teachers', 'edit teachers', 'delete teachers', 'manage teacher transfers',
            
            // Exam Management
            'manage exams', 'view exam results', 'publish exam results', 'manage term tests',
            
            // Attendance Management
            'view attendance', 'manage attendance', 'generate attendance reports',
            
            // Resource Management
            'manage resources', 'allocate resources', 'view resource allocation'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
