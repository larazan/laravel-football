<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'author']);
        Role::create(['name' => 'sales']);
        Role::create(['name' => 'manager']);

        
        //competition
        Permission::create(['name' => 'add-competition']);
        Permission::create(['name' => 'edit-competition']);
        Permission::create(['name' => 'delete-competition']);

        //award
        Permission::create(['name' => 'add-award']);
        Permission::create(['name' => 'edit-award']);
        Permission::create(['name' => 'delete-award']);

        //club
        Permission::create(['name' => 'add-club']);
        Permission::create(['name' => 'edit-club']);
        Permission::create(['name' => 'delete-club']);

        //stadion
        Permission::create(['name' => 'add-stadion']);
        Permission::create(['name' => 'edit-stadion']);
        Permission::create(['name' => 'delete-stadion']);

        //player
        Permission::create(['name' => 'add-player']);
        Permission::create(['name' => 'edit-player']);
        Permission::create(['name' => 'delete-player']);

        //staff
        Permission::create(['name' => 'add-staff']);
        Permission::create(['name' => 'edit-staff']);
        Permission::create(['name' => 'delete-staff']);

        //position
        Permission::create(['name' => 'add-position']);
        Permission::create(['name' => 'edit-position']);
        Permission::create(['name' => 'delete-position']);

        //squad
        Permission::create(['name' => 'add-squad']);
        Permission::create(['name' => 'edit-squad']);
        Permission::create(['name' => 'delete-squad']);

        //partner
        Permission::create(['name' => 'add-partner']);
        Permission::create(['name' => 'edit-partner']);
        Permission::create(['name' => 'delete-partner']);

        //schedule
        Permission::create(['name' => 'add-schedule']);
        Permission::create(['name' => 'edit-schedule']);
        Permission::create(['name' => 'delete-schedule']);

            //match
            Permission::create(['name' => 'add-match']);
            Permission::create(['name' => 'edit-match']);
            Permission::create(['name' => 'delete-match']);

            //league
        Permission::create(['name' => 'add-league']);
        Permission::create(['name' => 'edit-league']);
        Permission::create(['name' => 'delete-league']);

            //team-league
            Permission::create(['name' => 'add-team-league']);
            Permission::create(['name' => 'edit-team-league']);
            Permission::create(['name' => 'delete-team-league']);

            //article
        Permission::create(['name' => 'add-article']);
        Permission::create(['name' => 'edit-article']);
        Permission::create(['name' => 'delete-article']);

        //category-article
        Permission::create(['name' => 'add-category-article']);
        Permission::create(['name' => 'edit-category-article']);
        Permission::create(['name' => 'delete-category-article']);

        //media
        Permission::create(['name' => 'add-media']);
        Permission::create(['name' => 'edit-media']);
        Permission::create(['name' => 'delete-media']);

        //segment
        Permission::create(['name' => 'add-segment']);
        Permission::create(['name' => 'edit-segment']);
        Permission::create(['name' => 'delete-segment']);

        //adv
        Permission::create(['name' => 'add-adv']);
        Permission::create(['name' => 'edit-adv']);
        Permission::create(['name' => 'delete-adv']);

        //user
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);

        //setting
        Permission::create(['name' => 'add-setting']);
        Permission::create(['name' => 'edit-setting']);
        Permission::create(['name' => 'delete-setting']);

        //role
        Permission::create(['name' => 'add-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);

        //permission
        Permission::create(['name' => 'add-permission']);
        Permission::create(['name' => 'edit-permission']);
        Permission::create(['name' => 'delete-permission']);

        //faq
        Permission::create(['name' => 'add-faq']);
        Permission::create(['name' => 'edit-faq']);
        Permission::create(['name' => 'delete-faq']);

        //slide
        Permission::create(['name' => 'add-slide']);
        Permission::create(['name' => 'edit-slide']);
        Permission::create(['name' => 'delete-slide']);

        //category
        Permission::create(['name' => 'add-category']);
        Permission::create(['name' => 'edit-category']);
        Permission::create(['name' => 'delete-category']);
        //brand
        Permission::create(['name' => 'add-brand']);
        Permission::create(['name' => 'edit-brand']);
        Permission::create(['name' => 'delete-brand']);
        //product
        Permission::create(['name' => 'add-product']);
        Permission::create(['name' => 'edit-product']);
        Permission::create(['name' => 'delete-product']);
        //attribute
        Permission::create(['name' => 'add-attribute']);
        Permission::create(['name' => 'edit-attribute']);
        Permission::create(['name' => 'delete-attribute']);
        //product-slide
        Permission::create(['name' => 'add-product-slide']);
        Permission::create(['name' => 'edit-product-slide']);
        Permission::create(['name' => 'delete-product-slide']);
        //basket
        Permission::create(['name' => 'add-basket']);
        Permission::create(['name' => 'edit-basket']);
        Permission::create(['name' => 'delete-basket']);
        //order
        Permission::create(['name' => 'add-order']);
        Permission::create(['name' => 'edit-order']);
        Permission::create(['name' => 'delete-order']);
        //shipment
        Permission::create(['name' => 'add-shipment']);
        Permission::create(['name' => 'edit-shipment']);
        Permission::create(['name' => 'delete-shipment']);
        

        // ADMIN
        $roleAdmin = Role::findByName('admin');
        // competition
        $roleAdmin->givePermissionTo('add-competition');
        $roleAdmin->givePermissionTo('edit-competition');
        $roleAdmin->givePermissionTo('delete-competition');
        // award
        $roleAdmin->givePermissionTo('add-award');
        $roleAdmin->givePermissionTo('edit-award');
        $roleAdmin->givePermissionTo('delete-award');
        // club
        $roleAdmin->givePermissionTo('add-club');
        $roleAdmin->givePermissionTo('edit-club');
        $roleAdmin->givePermissionTo('delete-club');
        // stadion
        $roleAdmin->givePermissionTo('add-stadion');
        $roleAdmin->givePermissionTo('edit-stadion');
        $roleAdmin->givePermissionTo('delete-stadion');
        // player
        $roleAdmin->givePermissionTo('add-player');
        $roleAdmin->givePermissionTo('edit-player');
        $roleAdmin->givePermissionTo('delete-player');
        // staff
        $roleAdmin->givePermissionTo('add-staff');
        $roleAdmin->givePermissionTo('edit-staff');
        $roleAdmin->givePermissionTo('delete-staff');
        // position
        $roleAdmin->givePermissionTo('add-position');
        $roleAdmin->givePermissionTo('edit-position');
        $roleAdmin->givePermissionTo('delete-position');
        // squad
        $roleAdmin->givePermissionTo('add-squad');
        $roleAdmin->givePermissionTo('edit-squad');
        $roleAdmin->givePermissionTo('delete-squad');
        // partner
        $roleAdmin->givePermissionTo('add-partner');
        $roleAdmin->givePermissionTo('edit-partner');
        $roleAdmin->givePermissionTo('delete-partner');
        // schedule
        $roleAdmin->givePermissionTo('add-schedule');
        $roleAdmin->givePermissionTo('edit-schedule');
        $roleAdmin->givePermissionTo('delete-schedule');
        // match
        $roleAdmin->givePermissionTo('add-match');
        $roleAdmin->givePermissionTo('edit-match');
        $roleAdmin->givePermissionTo('delete-match');
        // league
        $roleAdmin->givePermissionTo('add-league');
        $roleAdmin->givePermissionTo('edit-league');
        $roleAdmin->givePermissionTo('delete-league');
        // team-league
        $roleAdmin->givePermissionTo('add-team-league');
        $roleAdmin->givePermissionTo('edit-team-league');
        $roleAdmin->givePermissionTo('delete-team-league');
        // segment
        $roleAdmin->givePermissionTo('add-segment');
        $roleAdmin->givePermissionTo('edit-segment');
        $roleAdmin->givePermissionTo('delete-segment');
        // adv
        $roleAdmin->givePermissionTo('add-adv');
        $roleAdmin->givePermissionTo('edit-adv');
        $roleAdmin->givePermissionTo('delete-adv');
        // user
        $roleAdmin->givePermissionTo('add-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('delete-user');
        // setting
        $roleAdmin->givePermissionTo('add-setting');
        $roleAdmin->givePermissionTo('edit-setting');
        $roleAdmin->givePermissionTo('delete-setting');
        // role
        $roleAdmin->givePermissionTo('add-role');
        $roleAdmin->givePermissionTo('edit-role');
        $roleAdmin->givePermissionTo('delete-role');
        // permission
        $roleAdmin->givePermissionTo('add-permission');
        $roleAdmin->givePermissionTo('edit-permission');
        $roleAdmin->givePermissionTo('delete-permission');
        

        // AUTHOR
        $roleAuthor = Role::findByName('author');
        // article
        $roleAuthor->givePermissionTo('add-article');
        $roleAuthor->givePermissionTo('edit-article');
        $roleAuthor->givePermissionTo('delete-article');
        // category-article
        $roleAuthor->givePermissionTo('add-category-article');
        $roleAuthor->givePermissionTo('edit-category-article');
        $roleAuthor->givePermissionTo('delete-category-article');
        // media
        $roleAuthor->givePermissionTo('add-media');
        $roleAuthor->givePermissionTo('edit-media');
        $roleAuthor->givePermissionTo('delete-media');
        // faq
        $roleAuthor->givePermissionTo('add-faq');
        $roleAuthor->givePermissionTo('edit-faq');
        $roleAuthor->givePermissionTo('delete-faq');
        // slide
        $roleAuthor->givePermissionTo('add-slide');
        $roleAuthor->givePermissionTo('edit-slide');
        $roleAuthor->givePermissionTo('delete-slide');

        // SALES
        $roleSales = Role::findByName('sales');
        // category
        $roleSales->givePermissionTo('add-category');
        $roleSales->givePermissionTo('edit-category');
        $roleSales->givePermissionTo('delete-category');
        // brand
        $roleSales->givePermissionTo('add-brand');
        $roleSales->givePermissionTo('edit-brand');
        $roleSales->givePermissionTo('delete-brand');
        // product
        $roleSales->givePermissionTo('add-product');
        $roleSales->givePermissionTo('edit-product');
        $roleSales->givePermissionTo('delete-product');
        // attribute
        $roleSales->givePermissionTo('add-attribute');
        $roleSales->givePermissionTo('edit-attribute');
        $roleSales->givePermissionTo('delete-attribute');
        // product-slide
        $roleSales->givePermissionTo('add-product-slide');
        $roleSales->givePermissionTo('edit-product-slide');
        $roleSales->givePermissionTo('delete-product-slide');
        // basket
        $roleSales->givePermissionTo('add-basket');
        $roleSales->givePermissionTo('edit-basket');
        $roleSales->givePermissionTo('delete-basket');
        // order
        $roleSales->givePermissionTo('add-order');
        $roleSales->givePermissionTo('edit-order');
        $roleSales->givePermissionTo('delete-order');
        // shipment
        $roleSales->givePermissionTo('add-shipment');
        $roleSales->givePermissionTo('edit-shipment');
        $roleSales->givePermissionTo('delete-shipment');
    }
}
