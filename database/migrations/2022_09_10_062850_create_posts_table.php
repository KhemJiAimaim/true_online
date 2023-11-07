<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('slug');
            $table->string('title');
            $table->string('keyword');
            $table->string('description');
            $table->text('freetag')->nullable();
            $table->string('h1')->nullable();
            $table->string('h2')->nullable()->nullable();
            $table->text('short_url')->nullable()->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_size')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->string('topic')->nullable();
            $table->text('content')->nullable();
            $table->text('iframe')->nullable();
            $table->text('category');
            $table->text('tags')->nullable();
            $table->text('redirect')->nullable();
            $table->text('link_facebook')->nullable();
            $table->text('link_twitter')->nullable();
            $table->text('link_instagram')->nullable();
            $table->text('link_youtube')->nullable();
            $table->text('link_line')->nullable();
            $table->dateTime('date_begin_display')->nullable();
            $table->dateTime('date_end_display')->nullable();
            $table->boolean('status_display')->default(false);
            $table->boolean('pin')->default(false);
            $table->boolean('defaults')->default(false);
            $table->integer('post_view')->default(0);
            $table->integer('priority')->default(1);
            $table->string('meta_tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean('allow_delete')->default(false)->comment("ถ้าเป็น true ลบได้เฉพาะ SuperAdmin");
            $table->boolean('is_maincontent')->default(false)->comment("ถ้าเป็น false = dynamic content");
            $table->integer('last_update_by')->nullable();
            $table->timestamps();
            $table->unique(['language','slug']);
        });
        DB::statement('ALTER TABLE `posts` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');
        DB::table('posts')->insert([
            [
                'id' => 1,
                'language' => 'th',
                'slug' => 'tamarindhome',
                'title' => 'tamarind',
                'keyword' => '',
                'description' => 'A THAI RESTAURANT AND WINE',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum in velit, non adipiscing elit tempus egestas. Elementum dis congue nullam at tempor est nullam. Commodo leo habitant mollis consectetur rhoncus. Erat auctor tortor purus suscipit. Vestibulum elementum vitae donec arcu nunc ullamcorper.</p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 2,
                'language' => 'th',
                'slug' => 'ourstory',
                'title' => 'Our Story',
                'keyword' => '',
                'description' => '',
                'content' => '<p>Tamarind was born from the desire of two sisters to unite their passion and ambition. The first, a talented chef, wanted to share her passion for the cuisine of her homeland. The second, who grew up in France, allied her ambition with a sense of reconnecting with her roots.</p>
                              <p>The restaurant, with it’s strong recent history, is first and foremost, a tribute to their mother, who was an exceptional chef in Thailand. </p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/bg-story.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 3,
                'language' => 'th',
                'slug' => 'contentmore1',
                'title' => 'contentmore',
                'keyword' => 'contentmore',
                'description' => '',
                'content' => '',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 4,
                'language' => 'th',
                'slug' => 'cartemenu',
                'title' => 'carte menu',
                'keyword' => '',
                'description' => 'A THAI RESTAURANT AND WINE',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum in velit, non adipiscing elit tempus egestas. Elementum dis congue nullam at tempor est nullam. Commodo leo habitant mollis consectetur rhoncus. Erat auctor tortor purus suscipit. Vestibulum elementum vitae donec arcu nunc ullamcorper.</p>',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => 'Tom yum goong',
                'thumbnail_link' => 'images/food-col3.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 6,
                'language' => 'th',
                'slug' => 'catering',
                'title' => 'Catering',
                'keyword' => '',
                'description' => 'Bespoke events and tailored catering',
                'content' => '<p>Tamarind provides tailored outside catering services and can also offer its own premises for your professional or personal events. Having enjoyed your own time at Tamarind, you would now like to share our unique experience with family, friends, clients or employees? We can host your event in a private room comfortably seating up to 18 people, or alternatively, why not take the entire restaurant which easily accomodates up to 52 guests. We also offer bespoke outside catering services covering all types of events (both professional and personal) from weddings to fashion launches, from diplomatic receptions to birthday parties and from a full menu to cocktails with « nibbles ». Our valuable experience and proven track record in this area will ensure your event meets all your guests expectations. For more information, feel free to email us at <a>tamarindthairestaurant@gmail.com</a></p>',
                'category' => ',3,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => 'Yam mamuang pou nim',
                'thumbnail_link' => 'images/food-col2.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 7,
                'language' => 'th',
                'slug' => 'contentmore3',
                'title' => 'contentmore',
                'keyword' => 'contentmore',
                'description' => '',
                'content' => '',
                'category' => ',3,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 8,
                'language' => 'th',
                'slug' => 'gallery',
                'title' => 'gallery',
                'keyword' => '',
                'description' => 'tamarind galerie photo',
                'content' => '',
                'category' => ',4,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => 'Yam mamuang pou nim',
                'thumbnail_link' => 'images/catering-img4.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 9,
                'language' => 'th',
                'slug' => 'contentmore4',
                'title' => 'contentmore',
                'keyword' => 'contentmore',
                'description' => '',
                'content' => '',
                'category' => ',4,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 10,
                'language' => 'th',
                'slug' => 'delivery',
                'title' => 'delivery',
                'keyword' => '',
                'description' => 'ipsum lectus lacus pellentesque.',
                'content' => '<p>For those who are more comfortable at home, we are glad to offer Tamarind hot food for local delivery through <a>Deliveroo</a> and <a>Ubereats</a> apps. Enjoy a journey through the delights of Thai cuisine from the comfort of your own home with our much loved dishes such as green chicken curry, Pad Thai, Panang curry, Tears of tiger…</p>',
                'category' => ',5,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 11,
                'language' => 'th',
                'slug' => 'deliveroo',
                'title' => 'deliveroo',
                'keyword' => 'select-menu',
                'description' => '',
                'content' => '',
                'category' => ',5,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => 'Place Your Order deliveroo',
                'thumbnail_link' => 'images/Deliveroo.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => 'https://deliveroo.co.uk/',
                'freetag' => ''
            ],
            [
                'id' => 12,
                'language' => 'th',
                'slug' => 'ubereats',
                'title' => 'Uber Eats',
                'keyword' => 'select-menu',
                'description' => '',
                'content' => '',
                'category' => ',5,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => 'Place Your Order Uber Eats',
                'thumbnail_link' => 'images/Ubereats.png',
                'priority' => 2,
                'iframe' => '',
                'redirect' => 'https://www.ubereats.com/',
                'freetag' => ''
            ],
            [
                'id' => 13,
                'language' => 'th',
                'slug' => 'aboutus',
                'title' => 'about us',
                'keyword' => '',
                'description' => 'ipsum lectus lacus pellentesque.',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus sed nec sapien, aliquam metus, leo. Gravida vel risus ullamcorper molestie sit eu posuere lectus est. Laoreet donec vitae congue at risus sit non.</p>',
                'category' => ',6,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 14,
                'language' => 'th',
                'slug' => 'about-ourstory',
                'title' => 'Our story',
                'keyword' => 'story-show',
                'description' => '',
                'content' => '<p>Tamarind was born from the desire of two sisters to unite their passion and ambition. The first, a talented chef, wanted to share her passion for the cuisine of her homeland. The second, who grew up in France, allied her ambition with a sense of reconnecting with her roots.  The restaurant, with it’s strong recent history, is first and foremost, a tribute to their mother, who was an exceptional chef in Thailand. Hailing from the region of Phetchabun, famous for the cultivation of tamarind, each season the best varieties of this iconic fruit are chosen, with which to subtly flavour dishes with its signature combination of sweetness and tartness. The common desire to share their family heritage helps to create dishes that are innovative yet traditional. The kitchen has undoubtedly evolved over time, yet has remained faithful to its pursuit of elegance and taste.</p>',
                'category' => ',6,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/about.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 15,
                'language' => 'th',
                'slug' => 'about-oursurroundings',
                'title' => 'Our surroundings',
                'keyword' => 'story-show',
                'description' => '',
                'content' => '<p>Tamarind was born from the desire of two sisters to unite their passion and ambition. The first, a talented chef, wanted to share her passion for the cuisine of her homeland. The second, who grew up in France, allied her ambition with a sense of reconnecting with her roots.  The restaurant, with it’s strong recent history, is first and foremost, a tribute to their mother, who was an exceptional chef in Thailand. Hailing from the region of Phetchabun, famous for the cultivation of tamarind, each season the best varieties of this iconic fruit are chosen, with which to subtly flavour dishes with its signature combination of sweetness and tartness. The common desire to share their family heritage helps to create dishes that are innovative yet traditional. The kitchen has undoubtedly evolved over time, yet has remained faithful to its pursuit of elegance and taste.</p>',
                'category' => ',6,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/about2.png',
                'priority' => 2,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 16,
                'language' => 'th',
                'slug' => 'about-ourunivers',
                'title' => 'Our Univers',
                'keyword' => 'story-show',
                'description' => '',
                'content' => '<p>Tamarind was born from the desire of two sisters to unite their passion and ambition. The first, a talented chef, wanted to share her passion for the cuisine of her homeland. The second, who grew up in France, allied her ambition with a sense of reconnecting with her roots. The restaurant, with it’s strong recent history, is first and foremost, a tribute to their mother, who was an exceptional chef in Thailand. Hailing from the region of Phetchabun, famous for the cultivation of tamarind, each season the best varieties of this iconic fruit are chosen, with which to subtly flavour dishes with its signature combination of sweetness and tartness. The common desire to share their family heritage helps to create dishes that are innovative yet traditional. The kitchen has undoubtedly evolved over time, yet has remained faithful to its pursuit of elegance and taste.</p>',
                'category' => ',6,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/about3.png',
                'priority' => 3,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 17,
                'language' => 'th',
                'slug' => 'ourlocation',
                'title' => 'our location',
                'keyword' => '',
                'description' => 'Ipsum lectus lacus pellentesque.',
                'content' => '',
                'category' => ',7,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 18,
                'language' => 'th',
                'slug' => 'contactus',
                'title' => 'Contact us',
                'keyword' => '',
                'description' => 'Please fill in the form below to send us an email',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 19,
                'language' => 'th',
                'slug' => 'booking-online',
                'title' => 'book',
                'keyword' => '',
                'description' => 'booking online',
                'content' => '',
                'category' => ',9,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus euismod arcu, velit orci fringilla semper. Sed tortor tortor nisi, egestas adipiscing eros.'
            ],
            [
                'id' => 20,
                'language' => 'th',
                'slug' => 'ourstory2',
                'title' => 'Our Story',
                'keyword' => '',
                'description' => '',
                'content' => '<p>Hailing from the region of Phetchabun, famous for the cultivation of tamarind, each season the best varieties of this iconic fruit are chosen, with which to subtly flavour dishes with its signature combination of sweetness and tartness.</p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/bg-story.png',
                'priority' => 2,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 21,
                'language' => 'th',
                'slug' => 'product-1',
                'title' => 'Yam mamuang pou nim',
                'keyword' => 'product',
                'description' => 'signature menu',
                'content' => '',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/food-col1.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 22,
                'language' => 'th',
                'slug' => 'product-2',
                'title' => 'Yam mamuang pou nim',
                'keyword' => 'product',
                'description' => 'signature menu',
                'content' => '',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/food-col1.png',
                'priority' => 2,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 23,
                'language' => 'th',
                'slug' => 'product-3',
                'title' => 'Yam mamuang pou nim',
                'keyword' => 'product',
                'description' => '',
                'content' => '',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/food-col1.png',
                'priority' => 3,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 24,
                'language' => 'th',
                'slug' => 'product-4',
                'title' => 'Yam mamuang pou nim',
                'keyword' => 'product',
                'description' => '',
                'content' => '',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/food-col3.png',
                'priority' => 4,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
            [
                'id' => 25,
                'language' => 'th',
                'slug' => 'product-5',
                'title' => 'Yam mamuang pou nim',
                'keyword' => 'product',
                'description' => '',
                'content' => '',
                'category' => ',2,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/food-col2.png',
                'priority' => 5,
                'iframe' => '',
                'redirect' => null,
                'freetag' => ''
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
