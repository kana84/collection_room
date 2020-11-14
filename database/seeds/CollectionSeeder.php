<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            [
                'user_id' => 1,
                'item_cd' => "kodomo-bee:10040481",
                'item_url' => "https://item.rakuten.co.jp/kodomo-bee/cbaa00001/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/kodomo-bee/cabinet/new83/cbaa00001-600r.jpg?_ex=128x128",
                'item_name' => "ストレッチパンツ スキニー ロング ボトムス ポケット 10分丈 伸縮性 男の子 女の子 キッズ 韓国子供服 子ども服 春 夏 秋 冬 90cm 100cm 110cm 120cm 130cm 140cm 150cm 160cm ◇ストレッチパンツ◇",
                'item_price' => 799,
            ],
            [
                'user_id' => 2,
                'item_cd' => "gbt-dko:10042846",
                'item_url' => "https://item.rakuten.co.jp/gbt-dko/25496/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/gbt-dko/cabinet/hobby/25496_1.jpg?_ex=128x128",
                'item_name' => "【完売間近！】11月下旬入荷予約 クリスマスツリー 180cm 豊富な枝数 2020ver.樅 クラシックタイプ 高級 ドイツトウヒツリー オーナメントセット なし アルザス ツリー Alsace おしゃれ ヌードツリー 北欧 スリム ornament Xmas tree",
                'item_price' => 16800,
            ],
            [
                'user_id' => 3,
                'item_cd' => "lindt-chocolate:10000932",
                'item_url' =>  "https://item.rakuten.co.jp/lindt-chocolate/9700304/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/lindt-chocolate/cabinet/lindor_tasting/9700304_23.jpg?_ex=128x128",
                'item_name' => "送料無料 リンツ Lindt チョコレート リンドール 22種23個入り テイスティングセット【チョコ ギフト かわいい おしゃれ お菓子 職場 個包装 プチギフト お礼 プレゼント スイーツ lindor ブランド 可愛い 退職 クリスマス クリスマス2020 お歳暮 リンツチョコ 誕生日】",
                'item_price' => 2980,
            ],
            [
                'user_id' => 4,
                'item_cd' => "prime-market:10004645",
                'item_url' => "https://item.rakuten.co.jp/prime-market/swt-079/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/prime-market/cabinet/harada01/swt-079.jpg?_ex=128x128",
                'item_name' => "ハラダラスク ハラダのラスク ハラダ ラスク 原田 グーテ デ ロワ プレミアムセレクション PS2(セット内容:グーテ デ ロワ2枚入12袋24枚入/ホワイトチョコレート1枚入8袋入/プレミアム1枚入8袋入)ガトーフェスタハラダ 王様のおやつ お菓子 熨斗無料",
                'item_price' => 5100,
            ],
            [
                'user_id' => 5,
                'item_cd' => "rl-waffle:10000107",
                'item_url' => "https://item.rakuten.co.jp/rl-waffle/0-set-kobe/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/rl-waffle/cabinet/2019-03m/600_ota_01-r.jpg?_ex=128x128",
                'item_name' => "【送料無料】お取り寄せスイーツ お試し神戸ワッフルセット スイーツ 退職 お礼 お菓子 お返し 産休 ギフト プレゼント | ワッフル 内祝い ワッフルケーキ ケーキ 出産内祝い おしゃれ 洋菓子 詰め合わせ お祝い返し 誕生日プレゼント ブラウニー お歳暮 お年賀 クリスマス",
                'item_price' => 2730,
            ],
            [
                'user_id' => 6,
                'item_cd' => "shaddy:10233720",
                'item_url' => "https://item.rakuten.co.jp/shaddy/147641080/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/shaddy/cabinet/20catalog/010/207644072.jpg?_ex=128x128",
                'item_name' =>  "天然水おかき まろやかさん(340g) TM-30 送料無料 内祝 お菓子 菓子折り 和菓子 焼き菓子 スイーツ ギフト 詰め合わせ 個包装 おかき お煎餅 せんべい お礼 ごあいさつ 退職 引越し 転勤 大量 小分け",
                'item_price' => 3240,
            ],
            [
                'user_id' => 7,
                'item_cd' => "1894ginza-sembikiya:10001131",
                'item_url' => "https://item.rakuten.co.jp/1894ginza-sembikiya/10001131/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/1894ginza-sembikiya/cabinet/04772478/imgrc0090563498.jpg?_ex=128x128",
                'item_name' => "［送料無料］銀座千疋屋特選 銀座焼きショコラサブレ : 千疋屋 お菓子 ギフト 内祝い お歳暮",
                'item_price' => 4320,
            ],
            [
                'user_id' => 8,
                'item_cd' => "aikuru:10308056",
                'item_url' => "https://item.rakuten.co.jp/aikuru/ap6244-072-85/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/aikuru/cabinet/aikuru-sp/csa-15.jpg?_ex=128x128",
                'item_name' => "【内祝い　お菓子　送料無料 ギフト】ダンケ 焼菓子詰合せ キュートセレクション23号 ＜CSA-15＞【 お供え 入学内祝い クリスマス お返し 内祝い お返し 出産内祝い ギフト 結婚内祝い 香典返し 満中陰志 法事 お歳暮 快気祝い 餞別 食品 菓子折り お礼 詰め合わせ】",
                'item_price' => 2000,
            ],
            [
                'user_id' => 9,
                'item_cd' => "ec-fellini:10000912",
                'item_url' => "https://item.rakuten.co.jp/ec-fellini/55_2257_12/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/ec-fellini/cabinet/55_2257_12/55_2257_12_01.jpg?_ex=128x128",
                'item_name' => "【ネコポス】fellini(フェリーニ)一度はいたらやみつきに！速攻美脚メイク激ノビウルトラストレッチデニム スキニー パンツ レギパン ジーンズ レディース サルエルパンツ ガウチョパンツ レギンス レディースファッション",
                'item_price' => 2178,
            ],
            [
                'user_id' => 10,
                'item_cd' => "ryuryu-shop:10128981",
                'item_url' => "https://item.rakuten.co.jp/ryuryu-shop/204945-1/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/ryuryu-shop/cabinet/hsmq-c/204945-1a.jpg?_ex=128x128",
                'item_name' => "【11/11再入荷】【送料無料】 裏起毛裾ファスナーパーカーワンピース(S?3L) レディースファッション ryuryu リュリュ 秋服 ワンピース 40代 マタニティ ロングワンピ あったか パーカー 長袖 着回し 裏起毛 ワンピース 大きいサイズ",
                'item_price' => 2189,
            ],
            [
                'user_id' => 11,
                'item_cd' => "cloverdepot:10002581",
                'item_url' => "https://item.rakuten.co.jp/cloverdepot/b2710034/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/cloverdepot/cabinet/b/b2710034.jpg?_ex=128x128",
                'item_name' => "【あす楽対応】バルーンシャツ レディース 長袖 トップス カジュアル ブラウス プルオーバー シャツ ボリューム バルーンスリーブ フレア 大きいサイズ M L XL 綿 レディースファッション 春 タック ゆる 可愛い かわいい ゆるふわシャツ ゆったり 大人可愛い カットソー",
                'item_price' => 1980,
            ],
            [
                'user_id' => 12,
                'item_cd' => "zhongtian:10016523",
                'item_url' => "https://item.rakuten.co.jp/zhongtian/tbk20/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/zhongtian/cabinet/bk/bk20.jpg?_ex=128x128",
                'item_name' => "【送料無料・即日発送 】2colorシフォン トップス パフスリーブ ブラウス 花柄 レースシャツ インナー 長袖 ブラウス 韓国レディースファッション おしゃれ 上品 着痩せ 体型カバー きれいめ ホワイト ブラック 通勤 通学 仕事 大人フェミニン ベーシック シンプル",
                'item_price' => 1518,
            ],
            [
                'user_id' => 13,
                'item_cd' => "mydearest:10000218",
                'item_url' => "https://item.rakuten.co.jp/mydearest/lt0003/",
                'image_url' =>  "https://thumbnail.image.rakuten.co.jp/@0_mall/mydearest/cabinet/06688838/imgrc0075600632.jpg?_ex=128x128",
                'item_name' => "ロングカットソー　レディースファッション 長袖 トップス チュニック 春 秋 夏 冬 グレー ホワイト 白 フィッシュテール アシンメトリー シンプル カジュアル マタニティー 妊婦服 M L XL 大きいサイズ 体系カバー ワンピース ワンピ",
                'item_price' => 1800,
            ],
            [
                'user_id' => 14,
                'item_cd' => "holic:10001286",
                'item_url' => "https://item.rakuten.co.jp/holic/r-0585-o/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/holic/cabinet/main/op/r-0585-o.jpg?_ex=128x128",
                'item_name' => "ゆるシルエット変形デザインチュニック ドルマンスリーブ ワンピース カットソー Vネック 小顔 春秋 レディース ファッション 通販[M便 10/10]",
                'item_price' => 2074,
            ],
            [
                'user_id' => 15,
                'item_cd' => "clairmode:10003612",
                'item_url' => "https://item.rakuten.co.jp/clairmode/aw-27921000/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/clairmode/cabinet/04576411/05422946/12175029210-top_1.jpg?_ex=128x128",
                'item_name' => "【送料無料/即日発送/再入荷/楽天1位】 大人気のグラデーションチュニック(ネックレス付き) 春秋冬 全3色 M-LL 洗える 長袖 レディースファッション トップス チュニック カットソー ニット ロング丈 ゆったり 体型カバー %off 0129",
                'item_price' => 3900,
            ],

        ]);
    }
}
