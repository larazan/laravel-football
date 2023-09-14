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
        //
        $roles = [
            ['name' => 'author', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'sales', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'manager', 'guard_name' => 'web', 'created_at' => Carbon::now()],
        ];

        $permissions = [
            //competition
            ['name' => 'add-competition', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-competition', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-competition', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //award
            ['name' => 'add-award', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-award', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-award', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //club
            ['name' => 'add-club', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-club', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-club', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //stadion
            ['name' => 'add-stadion', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-stadion', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-stadion', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //player
            ['name' => 'add-player', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-player', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-player', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //staff
            ['name' => 'add-staff', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-staff', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-staff', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //position
            ['name' => 'add-position', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-position', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-position', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //squad
            ['name' => 'add-squad', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-squad', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-squad', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //partner
            ['name' => 'add-partner', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-partner', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-partner', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //schedule
            ['name' => 'add-schedule', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-schedule', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-schedule', 'guard_name' => 'web', 'created_at' => Carbon::now()],

             //match
             ['name' => 'add-match', 'guard_name' => 'web', 'created_at' => Carbon::now()],
             ['name' => 'edit-match', 'guard_name' => 'web', 'created_at' => Carbon::now()],
             ['name' => 'delete-match', 'guard_name' => 'web', 'created_at' => Carbon::now()],

             //league
            ['name' => 'add-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],

             //team-league
             ['name' => 'add-team-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],
             ['name' => 'edit-team-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],
             ['name' => 'delete-team-league', 'guard_name' => 'web', 'created_at' => Carbon::now()],

              //article
            ['name' => 'add-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //category-article
            ['name' => 'add-category-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-category-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-category-article', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //media
            ['name' => 'add-media', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-media', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-media', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //segment
            ['name' => 'add-segment', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-segment', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-segment', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //adv
            ['name' => 'add-adv', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-adv', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-adv', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //user
            ['name' => 'add-user', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-user', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-user', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //setting
            ['name' => 'add-setting', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-setting', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-setting', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //role
            ['name' => 'add-role', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-role', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-role', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //permission
            ['name' => 'add-permission', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-permission', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-permission', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //faq
            ['name' => 'add-faq', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-faq', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-faq', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //slide
            ['name' => 'add-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],

            //category
            ['name' => 'add-category', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-category', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-category', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //brand
            ['name' => 'add-brand', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-brand', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-brand', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //product
            ['name' => 'add-product', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-product', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-product', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //attribute
            ['name' => 'add-attribute', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-attribute', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-attribute', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //product-slide
            ['name' => 'add-product-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-product-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-product-slide', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //basket
            ['name' => 'add-basket', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-basket', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-basket', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //order
            ['name' => 'add-order', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-order', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-order', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            //shipment
            ['name' => 'add-shipment', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'edit-shipment', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ['name' => 'delete-shipment', 'guard_name' => 'web', 'created_at' => Carbon::now()],
        ];

        Role::insert($roles);
        Permission::insert($permissions);

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
