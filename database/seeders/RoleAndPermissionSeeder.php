<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        
        $superAdmin = Role::firstOrCreate(['slug' => 'super-admin'], ['name' => 'Super Admin']);
        $support    = Role::firstOrCreate(['slug' => 'support'], ['name' => 'Support']);
        $writer     = Role::firstOrCreate(['slug' => 'writer'], ['name' => 'Writers']);
        $finance    = Role::firstOrCreate(['slug' => 'finance'], ['name' => 'Finance']);
        $seo        = Role::firstOrCreate(['slug' => 'seo'], ['name' => 'Content']);


        
// ORDER MANAGEMENT MODULE
$pIndexOrder  = Permission::firstOrCreate(['slug' => 'index-order'], ['name' => 'View Orders List', 'module' => 'Order']);
$pCreateOrder = Permission::firstOrCreate(['slug' => 'create-order'], ['name' => 'Create/Place Order', 'module' => 'Order']);
$pEditOrder   = Permission::firstOrCreate(['slug' => 'edit-order'], ['name' => 'Edit & Update Order Status', 'module' => 'Order']);
$pDeleteOrder = Permission::firstOrCreate(['slug' => 'delete-order'], ['name' => 'Delete Order', 'module' => 'Order']);
$pAssignOrder = Permission::firstOrCreate(['slug' => 'assign-order'], ['name' => 'Assign Orders to Writers', 'module' => 'Order']);
$pUploadWork  = Permission::firstOrCreate(['slug' => 'upload-work'], ['name' => 'Upload Completed Assignments', 'module' => 'Order']);


// USER & STAFF MANAGEMENT MODULE
$pIndexUser  = Permission::firstOrCreate(['slug' => 'index-user'], ['name' => 'View Users & Staff List', 'module' => 'User']);
$pCreateUser = Permission::firstOrCreate(['slug' => 'create-user'], ['name' => 'Add New Staff/User', 'module' => 'User']);
$pEditUser   = Permission::firstOrCreate(['slug' => 'edit-user'], ['name' => 'Edit User Details & Roles', 'module' => 'User']);
$pDeleteUser = Permission::firstOrCreate(['slug' => 'delete-user'], ['name' => 'Delete User/Staff Account', 'module' => 'User']);


// FINANCE & INVOICE MODULE
$pIndexFinance  = Permission::firstOrCreate(['slug' => 'index-finance'], ['name' => 'View Payments & Transactions', 'module' => 'Finance']);
$pCreateFinance = Permission::firstOrCreate(['slug' => 'create-finance'], ['name' => 'Generate Invoices & Receipts', 'module' => 'Finance']);
$pEditFinance   = Permission::firstOrCreate(['slug' => 'edit-finance'], ['name' => 'Edit Payment Records', 'module' => 'Finance']);
$pDeleteFinance = Permission::firstOrCreate(['slug' => 'delete-finance'], ['name' => 'Delete Transaction Record', 'module' => 'Finance']);


// CMS (BLOGS & PAGES) MODULE
$pIndexCMS  = Permission::firstOrCreate(['slug' => 'index-cms'], ['name' => 'View Blogs & Services Pages', 'module' => 'CMS']);
$pCreateCMS = Permission::firstOrCreate(['slug' => 'create-cms'], ['name' => 'Create Blog or Services Page', 'module' => 'CMS']);
$pEditCMS   = Permission::firstOrCreate(['slug' => 'edit-cms'], ['name' => 'Edit Website Content & Blogs', 'module' => 'CMS']);
$pDeleteCMS = Permission::firstOrCreate(['slug' => 'delete-cms'], ['name' => 'Delete Blog or Page', 'module' => 'CMS']);


// SEO MANAGEMENT MODULE
$pIndexSEO  = Permission::firstOrCreate(['slug' => 'index-seo'], ['name' => 'View SEO Meta Configuration', 'module' => 'SEO']);
$pCreateSEO = Permission::firstOrCreate(['slug' => 'create-seo'], ['name' => 'Add Meta Tags to Pages', 'module' => 'SEO']);
$pEditSEO   = Permission::firstOrCreate(['slug' => 'edit-seo'], ['name' => 'Update Meta Titles & Descriptions', 'module' => 'SEO']);
$pDeleteSEO = Permission::firstOrCreate(['slug' => 'delete-seo'], ['name' => 'Remove SEO Meta Data', 'module' => 'SEO']);


// SUPPORT & COMMUNICATION MODULE
$pIndexSupport  = Permission::firstOrCreate(['slug' => 'index-support'], ['name' => 'View Customer Messages & Inquiries', 'module' => 'Support']);
$pCreateSupport = Permission::firstOrCreate(['slug' => 'create-support'], ['name' => 'Send Customer Notification', 'module' => 'Support']);
$pEditSupport   = Permission::firstOrCreate(['slug' => 'edit-support'], ['name' => 'Handle/Process Support Ticket', 'module' => 'Support']);
$pDeleteSupport = Permission::firstOrCreate(['slug' => 'delete-support'], ['name' => 'Delete Support Message', 'module' => 'Support']);


// ADMIN CORE & SETTINGS MODULE
$pViewAnalytics  = Permission::firstOrCreate(['slug' => 'view-analytics'], ['name' => 'View Analytics & Revenue', 'module' => 'Admin']);
$pManageSettings = Permission::firstOrCreate(['slug' => 'manage-settings'], ['name' => 'Change Website Settings', 'module' => 'Admin']);

        $superAdmin->permissions()->attach([
            $pIndexOrder->id, $pCreateOrder->id, $pEditOrder->id, $pDeleteOrder->id, $pAssignOrder->id, $pUploadWork->id,
            $pIndexUser->id, $pCreateUser->id, $pEditUser->id, $pDeleteUser->id,
            $pIndexFinance->id, $pCreateFinance->id, $pEditFinance->id, $pDeleteFinance->id,
            $pIndexCMS->id, $pCreateCMS->id, $pEditCMS->id, $pDeleteCMS->id,
            $pIndexSEO->id, $pCreateSEO->id, $pEditSEO->id, $pDeleteSEO->id,
            $pIndexSupport->id, $pCreateSupport->id, $pEditSupport->id, $pDeleteSupport->id,
            $pViewAnalytics->id, $pManageSettings->id
        ]);

        $writer->permissions()->attach([
            $pIndexOrder->id, 
            $pUploadWork->id
        ]);

       
        $support->permissions()->attach([
            $pIndexOrder->id,     
            $pIndexSupport->id, 
            $pEditSupport->id
        ]);

        
        $finance->permissions()->attach([
            $pIndexFinance->id,
            $pCreateFinance->id, 
            $pEditFinance->id
        ]);

       
        $seo->permissions()->attach([
            $pIndexCMS->id, $pCreateCMS->id, $pEditCMS->id,
            $pIndexSEO->id, $pCreateSEO->id, $pEditSEO->id
        ]);


        $user = User::find(1);
        if ($user) {
           
            $user->roles()->sync([$superAdmin->id]);
        }
    }
}
