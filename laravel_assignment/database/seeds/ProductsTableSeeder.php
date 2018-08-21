<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Quần jean nam màu xanh',
                'description'=>'Quần jean nam đẹp màu xanh jean',
                'price'=>250000,
                'categoryId'=>1,
                'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534840761.png',
                'content'=>'Quần jean nam xuất khẩu châu âu, có đủ kích cỡ',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>2,
                'name'=>'QUẦN JEANS NAM KJB0109048',
                'description'=>'KOJIBA KJB0109048 Slim Fit – Ống côn 17cm , cạp trễ dưới eo , ôm mông và đùi dáng ôm vừa phải , phù hợp với đa số phom người Việt Nam',
                'price'=>350000,
                'categoryId'=>1,
                'images'=>'http://quanjeannhapkhau.com/wp-content/uploads/2017/06/KJB0109048_3.jpg',
                'content'=>'Mặt hàng thời trang không thể thiếu trong tủ áo quần của những người đàn ông thời thượng',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>3,
                'name'=>'Quần jean xanh sáng',
                'description'=>' Quần jean xanh, chất liệu co dãn, bền màu. Ống hơn côn',
                'price'=>450000,
                'categoryId'=>1,
                'images'=>'https://pnf.vn/wp-content/uploads/2017/08/QBD.018-3.jpg',
                'content'=>'Quần jean nam sản xuất tại Việt Nam từ công ty Phan Nguyễn',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>4,
                'name'=>'Quần Jeans Lửng Nam NEW FASHION',
                'description'=>'Quần jeans với hai màu cơ bản xanh và xanh đen',
                'price'=>180000,
                'categoryId'=>1,
                'images'=>'http://coophomeshopping.vn/10096-thickbox_default/bo-02-quan-jeans-lung-nam-new-fashion.jpg',
                'content'=>'New Fashion là nhãn hiệu thời trang được sản xuất tại Việt Nam theo xu hướng mới hiện nay',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>5,
                'name'=>'ÁO KHOÁC BÒ RED Ruggison',
                'description'=>'Áo khoác bò hầm hố',
                'price'=>300000,
                'categoryId'=>2,
                'images'=>'http://bizweb.dktcdn.net/100/077/578/products/untitled.jpg?v=1509345502713',
                'content'=>'ÁO KHOÁC BÒ RED Ruggison',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>6,
                'name'=>'Áo khoác bò - Denim jecket',
                'description'=>'Áo khoác bò chất liệu cotton hơi thun',
                'price'=>350000,
                'categoryId'=>2,
                'images'=>'http://product.hstatic.net/1000201749/product/dsc_7690.jpg',
                'content'=>'Quý khách đặt hàng vui lòng copy mã sản phẩm và click vào link chat facebook để liên hệ đặt hàng.',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>7,
                'name'=>'Áo Khoác Bò Nam Pt3009',
                'description'=>'Áo khoác bò nam màu xanh tối mài nhẹ PT3009Thiết kế thời trang',
                'price'=>550000,
                'categoryId'=>2,
                'images'=>'https://vn-test-11.slatic.net/p/7/ao-khoac-bo-nam-pt3009-xanh-5018-6902254-e31cf3246039c53d56e0bce0a3999882-catalog.jpg_340x340q80.jpg_.webp',
                'content'=>'Áo khoác bò nhập khẩu',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>8,
                'name'=>'ÁO KHOÁC BO CỔ 2 TÚI- ĐEN',
                'description'=>'Áo khoác xì teen',
                'price'=>400000,
                'categoryId'=>2,
                'images'=>'https://file.hstatic.net/1000029579/file/z766693910270_0cf70496db8ee6260cdcd9fad1721522_grande.jpg',
                'content'=>'Màu sắc có thể chênh lệch do độ sáng tối của ánh sáng đèn nhé khách',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>9,
                'name'=>'Giày Nike Zoom 43',
                'description'=>'Giày Thể Thao Nam Nữ',
                'price'=>550000,
                'categoryId'=>3,
                'images'=>'http://anchuongshoes.com/image/cache/catalog/GAC/Giay-Nike-Zoom-43-02-800x800.jpg',
                'content'=>'Thiết kế chuẩn mực cho các hoạt động mạnh như tập Gym , chạy bộ hay sử dụng thường ngày cho cuộc sống bận rộn',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>10,
                'name'=>'GIÀY NIKE AIR MAX MOTION LW',
                'description'=>'Giầy thể thao cho nữ',
                'price'=>250000,
                'categoryId'=>3,
                'images'=>'https://www.kingsport.vn/vnt_upload/product/giay_nike_nu/0000199364273_nike-833662_010_anp_05.jpg',
                'content'=>'Giầy nhập khẩu Ấn Độ',
                'note'=>'Hết hàng'
            ],
            [
                'id'=>11,
                'name'=>'Giày Nike Air Max 2017',
                'description'=>'Sản phẩm giày Nike chính hãng',
                'price'=>1250000,
                'categoryId'=>3,
                'images'=>'https://vn-test-11.slatic.net/p/7/giay-nike-air-max-2017-849559-401-6614-33804811-c3e64674db24e538a25d42229144c7a5-catalog.jpg_340x340q80.jpg_.webp',
                'content'=>'Air max là một trong những công nghệ giày thành công nhất hiện nay',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>12,
                'name'=>'Giày nike air force one trắng',
                'description'=>'Sản phẩm giày Nike chính hãng',
                'price'=>1520000,
                'categoryId'=>3,
                'images'=>'https://kiza.vn/media/wysiwyg/products/nike/KNI025/giay-nike-zoom-mau-den-005.jpg',
                'content'=>'Giày Nike Air Force original hiện nay đã là một trong những loại giày thể thao nổi tiếng trên toàn thế giới',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>13,
                'name'=>'Nón lưỡi trai trơn nam tính',
                'description'=>'Thiết kế thời trang, chất liệu cao cấp, dễ dàng phối trang phục',
                'price'=>25000,
                'categoryId'=>4,
                'images'=>'https://vn-test-11.slatic.net/p/non-luoi-trai-tron-nam-tinh-gt-247-km-68-5147-8810403-b16ad51e85d501184cddbdf5a507f200-catalog.jpg_340x340q80.jpg_.webp',
                'content'=>'Chất liệu vải mềm, nhẹ, thấm hút mồ hôi.',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>14,
                'name'=>'NÓN LƯỠI TRAI C11',
                'description'=>'Mũ thời trang trẻ',
                'price'=>150000,
                'categoryId'=>4,
                'images'=>'https://xenboutique.com/wp-content/uploads/2017/05/non-luoi-trai-6-5.jpg',
                'content'=>'Đổi trả miễn phí trong vòng 7 ngày',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>15,
                'name'=>'Mũ (nón) lưỡi trai thời trang cao cấp Xiaomi',
                'description'=>'Mũ thời trang xiaomi',
                'price'=>220000,
                'categoryId'=>4,
                'images'=>'http://www.chiemtaimobile.vn/images/detailed/19/non-luoi-trai-xiaomi-hinh-1.jpg',
                'content'=>'Mũ lưỡi trai thời trang cao cấp Xiaomi được thiết kế theo kiểu dáng cực kỳ đơn giản nhưng lại vô cùng thanh lịch, năng động',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>16,
                'name'=>'Mũ Lưỡi Trai - A3235',
                'description'=>'Mũ lưỡi trai màu đen',
                'price'=>160000,
                'categoryId'=>4,
                'images'=>'http://product.hstatic.net/1000157764/product/screenshot_179.png',
                'content'=>'Ship miễn phí nội thành Hà Nội',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>17,
                'name'=>'Thắt lưng nam da khóa kim DT06',
                'description'=>'Chất liệu da bò, bền, đẹp',
                'price'=>270000,
                'categoryId'=>5,
                'images'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/1/_/that_lung_nam_da_khoa_kim_dt06_fe23.jpg',
                'content'=>'Ship miễn phí nội thành Hà Nội',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>18,
                'name'=>'Dây nịt nam HUY HOÀNG cao cấp',
                'description'=>'Chất liệu được làm và xử lý theo công nghệ hiện đại từ da bò thật 100%',
                'price'=>350000,
                'categoryId'=>5,
                'images'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/1/_/day_nit_nam_huy_hoang_cao_cap_hh41324133_f9a1.jpg',
                'content'=>'Thời gian bảo hành: 1 năm',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>19,
                'name'=>'Thắt lưng nam LATA mạnh mẽ',
                'description'=>'Chất liệu da bò được xử lí theo đúng quy trình nên chất lượng tốt',
                'price'=>190000,
                'categoryId'=>5,
                'images'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/1/_/that_lung_nam_lata_manh_me_tl21_1fb8.jpg',
                'content'=>'Thời gian bảo hành: 1 năm',
                'note'=>'Còn hàng'
            ],
            [
                'id'=>20,
                'name'=>'Thắt lưng đuôi cá sấu nam khóa kim ',
                'description'=>' Chất liệu da cá sấu, lót trong da bò được xử lí theo đúng quy trình nên chất lượng tốt',
                'price'=>850000,
                'categoryId'=>5,
                'images'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/4/_/that_lung_duoi_ca_sau_nam_khoa_kim_300c.jpg',
                'content'=>'Thời gian bảo hành: 1 năm',
                'note'=>'Còn hàng'
            ],
        ]);
    }
}
