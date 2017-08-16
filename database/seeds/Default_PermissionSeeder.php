<?php
/**
 * Created by PhpStorm.
 * Author: Soe Thandar Aung
 * Date: 11/2/2016
 * Time: 2:18 PM
 */
use Illuminate\Database\Seeder;
class Default_PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('core_permissions')->delete();

        $permissions = array(

            // Roles
            ['id'=>1,'module'=>'Role','name'=>'Listing','description'=>'Role Listing','url'=>'backend/role'],
            ['id'=>2,'module'=>'Role','name'=>'New','description'=>'Role New','url'=>'backend/role/create'],
            ['id'=>3,'module'=>'Role','name'=>'Store','description'=>'Role Store','url'=>'backend/role/store'],
            ['id'=>4,'module'=>'Role','name'=>'Edit','description'=>'Role Edit','url'=>'backend/role/edit'],
            ['id'=>5,'module'=>'Role','name'=>'Update','description'=>'Role Update','url'=>'backend/role/update'],
            ['id'=>6,'module'=>'Role','name'=>'Destroy','description'=>'Role Destroy','url'=>'backend/role/destroy'],
            ['id'=>7,'module'=>'Role','name'=>'Permission View','description'=>'Role Permission View','url'=>'backend/rolePermission'],
            ['id'=>8,'module'=>'Role','name'=>'Permission Assign','description'=>'Role Permission Assign','url'=>'backend/rolePermissionAssign'],

            // Users
            ['id'=>9,'module'=>'User','name'=>'Listing','description'=>'User Listing','url'=>'backend/user'],
            ['id'=>10,'module'=>'User','name'=>'New','description'=>'User New','url'=>'backend/user/create'],
            ['id'=>11,'module'=>'User','name'=>'Store','description'=>'User Store','url'=>'backend/user/store'],
            ['id'=>12,'module'=>'User','name'=>'Edit','description'=>'User Edit','url'=>'backend/user/edit'],
            ['id'=>13,'module'=>'User','name'=>'Update','description'=>'User Update','url'=>'backend/user/update'],
            ['id'=>14,'module'=>'User','name'=>'Destroy','description'=>'User Destroy','url'=>'backend/user/destroy'],
            ['id'=>15,'module'=>'User','name'=>'Auth','description'=>'Getting Auth User','url'=>'backend/userAuth'],
            ['id'=>16,'module'=>'User','name'=>'Profile','description'=>'User Profile','url'=>'backend/user/profile'],

            // Permissions
            ['id'=>17,'module'=>'Permission','name'=>'Listing','description'=>'Permission Listing','url'=>'backend/permission'],
            ['id'=>18,'module'=>'Permission','name'=>'New','description'=>'Permission New','url'=>'backend/permission/create'],
            ['id'=>19,'module'=>'Permission','name'=>'Store','description'=>'Permission Store','url'=>'backend/permission/store'],
            ['id'=>20,'module'=>'Permission','name'=>'Edit','description'=>'Permission Edit','url'=>'backend/permission/edit'],
            ['id'=>21,'module'=>'Permission','name'=>'Update','description'=>'Permission Update','url'=>'backend/permission/update'],
            ['id'=>22,'module'=>'Permission','name'=>'Destroy','description'=>'Permission Destroy','url'=>'backend/permission/destroy'],

            // Configs
            ['id'=>23,'module'=>'Config','name'=>'View','description'=>'Editing','url'=>'backend/config'],

            ['id'=>30,'module'=>'Backend','name'=>'Listing','description'=>'Backend Listing','url'=>'backend'],
            ['id'=>31,'module'=>'Backend','name'=>'New','description'=>'Backend New','url'=>'backend/create'],
            ['id'=>32,'module'=>'Backend','name'=>'Store','description'=>'Backend Store','url'=>'backend/store'],
            ['id'=>33,'module'=>'Backend','name'=>'Edit','description'=>'Backend Edit','url'=>'backend/edit'],
            ['id'=>34,'module'=>'Backend','name'=>'Update','description'=>'Backend Update','url'=>'backend/update'],
            ['id'=>35,'module'=>'Backend','name'=>'Detail','description'=>'Backend Detail','url'=>'backend/detail'],
            ['id'=>36,'module'=>'Backend','name'=>'Detail Update','description'=>'Backend Update','url'=>'backend/detail/update'],
            ['id'=>37,'module'=>'Frontend','name'=>'Listing','description'=>'Listing','url'=>'frontend'],
            ['id'=>38,'module'=>'Frontend','name'=>'Log','description'=>'Backend','url'=>'log/backend'],
            ['id'=>39,'module'=>'Frontend','name'=>'Log','description'=>'Frontend','url'=>'log/frontend'],
            ['id'=>40,'module'=>'Frontend','name'=>'Log','description'=>'Activation','url'=>'log/activation'],
            ['id'=>41,'module'=>'Frontend','name'=>'Update Status','description'=>'Update Status','url'=>'frontend/updatestatus'],
            ['id'=>42,'module'=>'Frontend','name'=>'Update','description'=>'Update Frontend','url'=>'frontend/update'],
            ['id'=>43,'module'=>'Frontend','name'=>'Edit','description'=>'Edit Frontend','url'=>'frontend/edit'],

            //Country
            ['id'=>50,'module'=>'Country','name'=>'Listing','description'=>'Country Listing','url'=>'backend/country'],
            ['id'=>51,'module'=>'Country','name'=>'New','description'=>'Country New','url'=>'backend/country/create'],
            ['id'=>52,'module'=>'Country','name'=>'Store','description'=>'Country Store','url'=>'backend/country/store'],
            ['id'=>53,'module'=>'Country','name'=>'Edit','description'=>'Country Edit','url'=>'backend/country/edit'],
            ['id'=>54,'module'=>'Country','name'=>'Update','description'=>'Country Update','url'=>'backend/country/update'],
            ['id'=>55,'module'=>'Country','name'=>'Destroy','description'=>'Country Destroy','url'=>'backend/country/destroy'],

            //City
            ['id'=>60,'module'=>'City','name'=>'Listing','description'=>'City Listing','url'=>'backend/city'],
            ['id'=>61,'module'=>'City','name'=>'New','description'=>'City New','url'=>'backend/city/create'],
            ['id'=>62,'module'=>'City','name'=>'Store','description'=>'City Store','url'=>'backend/city/store'],
            ['id'=>63,'module'=>'City','name'=>'Edit','description'=>'City Edit','url'=>'backend/city/edit'],
            ['id'=>64,'module'=>'City','name'=>'Update','description'=>'City Update','url'=>'backend/city/update'],
            ['id'=>65,'module'=>'City','name'=>'Destroy','description'=>'City Destroy','url'=>'backend/city/destroy'],

            //Township
            ['id'=>70,'module'=>'Township','name'=>'Listing','description'=>'Township Listing','url'=>'backend/township'],
            ['id'=>71,'module'=>'Township','name'=>'New','description'=>'Township New','url'=>'backend/township/create'],
            ['id'=>72,'module'=>'Township','name'=>'Store','description'=>'Township Store','url'=>'backend/township/store'],
            ['id'=>73,'module'=>'Township','name'=>'Edit','description'=>'Township Edit','url'=>'backend/township/edit'],
            ['id'=>74,'module'=>'Township','name'=>'Update','description'=>'Township Update','url'=>'backend/township/update'],
            ['id'=>75,'module'=>'Township','name'=>'Destroy','description'=>'Township Destroy','url'=>'backend/township/destroy'],

            // Pages
            ['id'=>80,'module'=>'Page','name'=>'Listing','description'=>'Page Listing','url'=>'backend/page'],
            ['id'=>81,'module'=>'Page','name'=>'New','description'=>'Page New','url'=>'backend/page/create'],
            ['id'=>82,'module'=>'Page','name'=>'Store','description'=>'Page Store','url'=>'backend/page/store'],
            ['id'=>83,'module'=>'Page','name'=>'Edit','description'=>'Page Edit','url'=>'backend/page/edit'],
            ['id'=>84,'module'=>'Page','name'=>'Update','description'=>'Page Update','url'=>'backend/page/update'],
            ['id'=>85,'module'=>'Page','name'=>'Destroy','description'=>'Page Destroy','url'=>'backend/page/destroy'],

             //Post
            ['id'=>90,'module'=>'Post','name'=>'Listing','description'=>'Post Listing','url'=>'backend/post'],
            ['id'=>91,'module'=>'Post','name'=>'Create','description'=>'Post Create','url'=>'backend/post/create'],
            ['id'=>92,'module'=>'Post','name'=>'Store','description'=>'Post Store','url'=>'backend/post/store'],
            ['id'=>93,'module'=>'Post','name'=>'Edit','description'=>'Post Edit','url'=>'backend/post/edit'],
            ['id'=>94,'module'=>'Post','name'=>'Update','description'=>'Post Update','url'=>'backend/post/update'],
            ['id'=>95,'module'=>'Post','name'=>'Destroy','description'=>'Post Destroy','url'=>'backend/post/destroy'],

            //ImageGallery
            ['id'=>100,'module'=>'ImageGallery','name'=>'Listing','description'=>'ImageGallery Listing','url'=>'backend/image_gallery'],
            ['id'=>101,'module'=>'ImageGallery','name'=>'Create','description'=>'ImageGallery Create','url'=>'backend/image_gallery/create'],
            ['id'=>102,'module'=>'ImageGallery','name'=>'Store','description'=>'ImageGallery Store','url'=>'backend/image_gallery/store'],
            ['id'=>103,'module'=>'ImageGallery','name'=>'Edit','description'=>'ImageGallery Edit','url'=>'backend/image_gallery/edit'],
            ['id'=>104,'module'=>'ImageGallery','name'=>'Update','description'=>'ImageGallery Update','url'=>'backend/image_gallery/update'],
            ['id'=>105,'module'=>'ImageGallery','name'=>'Destroy','description'=>'ImageGallery Destroy','url'=>'backend/image_gallery/destroy'],

            //Latest New
            ['id'=>110,'module'=>'LatestNew','name'=>'Listing','description'=>'LatestNew Listing','url'=>'backend/latest_new'],
            ['id'=>111,'module'=>'LatestNew','name'=>'Create','description'=>'LatestNew Create','url'=>'backend/latest_new/create'],
            ['id'=>112,'module'=>'LatestNew','name'=>'Store','description'=>'LatestNew Store','url'=>'backend/latest_new/store'],
            ['id'=>113,'module'=>'LatestNew','name'=>'Edit','description'=>'LatestNew Edit','url'=>'backend/latest_new/edit'],
            ['id'=>114,'module'=>'LatestNew','name'=>'Update','description'=>'LatestNew Update','url'=>'backend/latest_new/update'],
            ['id'=>115,'module'=>'LatestNew','name'=>'Destroy','description'=>'LatestNew Destroy','url'=>'backend/latest_new/destroy'],

            //Post Conference Travel
            ['id'=>120,'module'=>'PostConferenceTravel','name'=>'Listing','description'=>'PostConferenceTravel Listing','url'=>'backend/post_conference_travel'],
            ['id'=>121,'module'=>'PostConferenceTravel','name'=>'Create','description'=>'PostConferenceTravel Create','url'=>'backend/post_conference_travel/create'],
            ['id'=>122,'module'=>'PostConferenceTravel','name'=>'Store','description'=>'PostConferenceTravel Store','url'=>'backend/post_conference_travel/store'],
            ['id'=>123,'module'=>'PostConferenceTravel','name'=>'Edit','description'=>'PostConferenceTravel Edit','url'=>'backend/post_conference_travel/edit'],
            ['id'=>124,'module'=>'PostConferenceTravel','name'=>'Update','description'=>'PostConferenceTravel Update','url'=>'backend/post_conference_travel/update'],
            ['id'=>125,'module'=>'PostConferenceTravel','name'=>'Destroy','description'=>'PostConferenceTravel Destroy','url'=>'backend/post_conference_travel/destroy'],

            //Library Culture
            ['id'=>130,'module'=>'LibraryCulture','name'=>'Listing','description'=>'LibraryCulture Listing','url'=>'backend/library_culture'],
            ['id'=>131,'module'=>'LibraryCulture','name'=>'Create','description'=>'LibraryCulture Create','url'=>'backend/library_culture/create'],
            ['id'=>132,'module'=>'LibraryCulture','name'=>'Store','description'=>'LibraryCulture Store','url'=>'backend/library_culture/store'],
            ['id'=>133,'module'=>'LibraryCulture','name'=>'Edit','description'=>'LibraryCulture Edit','url'=>'backend/library_culture/edit'],
            ['id'=>134,'module'=>'LibraryCulture','name'=>'Update','description'=>'LibraryCulture Update','url'=>'backend/library_culture/update'],
            ['id'=>135,'module'=>'LibraryCulture','name'=>'Destroy','description'=>'LibraryCulture Destroy','url'=>'backend/library_culture/destroy'],

            //Accommodation
            ['id'=>140,'module'=>'Accommodation','name'=>'Listing','description'=>'Accommodation Listing','url'=>'backend/accommodation'],
            ['id'=>141,'module'=>'Accommodation','name'=>'Create','description'=>'Accommodation Create','url'=>'backend/accommodation/create'],
            ['id'=>142,'module'=>'Accommodation','name'=>'Store','description'=>'Accommodation Store','url'=>'backend/accommodation/store'],
            ['id'=>143,'module'=>'Accommodation','name'=>'Edit','description'=>'Accommodation Edit','url'=>'backend/accommodation/edit'],
            ['id'=>144,'module'=>'Accommodation','name'=>'Update','description'=>'Accommodation Update','url'=>'backend/accommodation/update'],
            ['id'=>145,'module'=>'Accommodation','name'=>'Destroy','description'=>'Accommodation Destroy','url'=>'backend/accommodation/destroy'],
        );

        DB::table('core_permissions')->insert($permissions);
    }
}