<?php

use App\Packet;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PacketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<50;$i++){

            $new_packet = new Packet();
            $new_packet->country=$faker->countryCode();
            $new_packet->city=$faker->city();
            $new_packet->accomodation_type= $this->typeGen();
            $new_packet->max_people=rand(1,5);
            $new_packet->price=rand(500,5000);
            $new_packet->img_url=$this->urlGen();
            $new_packet->save();
        }
    }
    private function typeGen(){
        $types = ['Apartment','House','Hotel','Tent','B&B'];
        shuffle($types);
        return $types[0];
    }
    private function urlGen(){
        $urls = [
            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png',
            'https://static.onecms.io/wp-content/uploads/sites/37/2016/02/15230656/white-modern-house-curved-patio-archway-c0a4a3b3.jpg',
            'https://ak-d.tripcdn.com/images/200d1g000001gzbipD1C4_R_550_412_R5_Q70_D.jpg',
            'https://richmedia.ca-richimage.com/ImageDelivery/imageService?profileId=12026540&id=1514376&recipeId=728',
            'https://www.cantarellibandb.com/wp-content/uploads/2019/02/Stanza-Bed-and-Brackfast-Cantarelli-Reggio-Emilia.jpg'
        ];
        shuffle($urls);
        return $urls[0];

    }
}
