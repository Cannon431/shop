<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->truncate();

        $goods = [
            [
                'category_id' => 2,
                'name' => 'Easy Polo Black Edition',
                'code' => 56575654,
                'price' => 56.5,
                'image' => 'product1.jpg',
                'manufacturer' => 'Adidas',
                'is_new' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Polo Blue Edition',
                'code' => 56575624,
                'price' => 58.9,
                'image' => 'product2.jpg',
                'manufacturer' => 'Puma',
                'is_new' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Armani Jeans Black',
                'code' => 56275654,
                'price' => 101,
                'image' => 'product3.jpg',
                'manufacturer' => 'Armani',
                'is_new' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Adidas Black Star',
                'code' => 56575634,
                'price' => 30.5,
                'image' => 'product4.jpg',
                'manufacturer' => 'Adidas',
                'is_new' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Vans Old School',
                'code' => 56575234,
                'price' => 80,
                'image' => 'product5.jpg',
                'manufacturer' => 'Vana',
                'is_new' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => false
            ],
            [
                'category_id' => 4,
                'name' => 'Coton black',
                'code' => 56575634,
                'price' => 33,
                'image' => 'product6.jpg',
                'manufacturer' => 'Coton',
                'is_new' => false,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto beatae culpa debitis ea eius enim esse expedita, impedit iusto nam natus, nulla quaerat sapiente sint voluptas voluptatum! Adipisci aliquid amet aspernatur commodi culpa deleniti eaque, eum illum inventore laborum minima minus molestiae mollitia neque nobis non nostrum obcaecati omnis pariatur perferendis praesentium provident quaerat quidem quo quod, soluta, suscipit tenetur vitae voluptas voluptatum! Dolore ducimus explicabo laborum quasi voluptas. Accusamus alias atque, consequatur culpa debitis delectus doloremque eum facere id in iste natus, nihil, non officia rem sit vitae voluptatum! A accusantium ad at autem, earum illum laboriosam magni nesciunt nihil perferendis qui tenetur! Deleniti ducimus modi quae. Dignissimos esse necessitatibus voluptatibus! A adipisci aliquam aliquid animi assumenda at beatae consequatur cumque dicta, dolor, doloremque ducimus eaque eligendi eum fugiat id iure labore mollitia nam necessitatibus nihil non nulla pariatur porro quae quo repellendus soluta temporibus totam vitae! A ad adipisci dolores harum, magnam molestias natus nulla quis reprehenderit, sint tempora tenetur unde velit, vero voluptatum! Accusamus, alias assumenda at consectetur consequuntur debitis dignissimos dolore eius eum facere fugit id laborum maiores minus molestias neque nobis nulla omnis praesentium, quam qui quo reiciendis repudiandae rerum suscipit temporibus voluptatibus.',
                'is_available' => true,
                'is_recommended' => false
            ],
        ];

        foreach ($goods as $good) {
            DB::table('goods')->insert([
                'category_id' => $good['category_id'],
                'name' => $good['name'],
                'price' => $good['price'],
                'image' => $good['image'],
                'manufacturer' => $good['manufacturer'],
                'is_new' => $good['is_new'],
                'description' => $good['description'],
                'is_available' => $good['is_available'],
                'code' => $good['code'],
                'is_recommended' => $good['is_recommended']
            ]);
        }
    }
}
