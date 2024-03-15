<script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll(".product-list img");
        const mainImage = document.getElementById("item-main");
        const itemTitle = document.getElementById("item-title");
        const itemPrice = document.getElementById("item-price");

        images.forEach(function (image) {
            image.addEventListener("click", function () {
                mainImage.src = image.src;
                itemTitle.textContent = image.nextElementSibling.textContent;
                itemPrice.textContent = image.nextElementSibling.nextElementSibling.textContent;
            });
        });
    });
</script>
<?php get_header() ?>
    <main>
        <section id="top" class="wrapper">

            <div>
                <h2 class="section-title">
                    <span class="en">Product List</span>
                    <span class="ja">商品一覧</span>
                </h2>
                <ul class="product-list">
                    <li>
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.jpg" alt="">
                            <p>クリアスカイコレクション</p>
                            <p>&yen;6,900 +tax</p>
                    </li>
                    <li>
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.jpg" alt="">
                            <p>アドベンチャーブレイズ</p>
                            <p>&yen;9,000 +tax</p>
                    </li>
                    <li>
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.jpg" alt="">
                            <p>ヴィンテージウェーブ</p>
                            <p>&yen;5,900 +tax</p>
                    </li>
                    <li>
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.jpg" alt="">
                            <p>フレッシュブリーズティー
                            </p>
                            <p>&yen;9,000 +tax</p>
                    </li>
                    <li>
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.jpg" alt="">
                            <p>サマーソニックス
                            </p>
                            <p>&yen;19,999 +tax</p>
                    </li>
                    <li>
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/6.jpg" alt="">
                            <p>ラディアントローズシャツ
                            </p>
                            <p>&yen;7,900 +tax</p>
                    </li>
                    <li>
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/7.jpg" alt="">
                            <p >ワンダフルウェーブウェア
                            </p>
                            <p >&yen;4,800 +tax</p>
                    </li>
                    <li>
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/8.jpg" alt="">
                            <p>エコーインフィニティティー
                            </p>
                            <p>&yen;10,000 +tax</p>
                    </li>
                </ul>
            </div>
            <div id="item" class="wrapper">
                <div class="item-image">
                    <img id="item-main" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.jpg" alt="">
                </div>

                <div class="item-info">
                    <h1 id="item-title" class="item-title">TOTALLY Short Sleeve Shirt</h1>
                    <p>
                        商品説明文が入ります。<br>
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキスト
                    </p>

                    <p id="item-price">￥9,999 +tax</p>

                    <table class="order-table">
                        <thead>
                        <tr>
                            <th class="color">Color</th>
                            <th class="size">Size</th>
                            <th class="quantity">Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>White</td>
                            <td>S</td>
                            <td>
                                <select name="quantity_s" id="quantity_s">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>White</td>
                            <td>M</td>
                            <td>
                                <select name="quantity_m" aria-label="Quantity M">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>White</td>
                            <td>L</td>
                            <td>
                                <select name="quantity_l" aria-label="Quantity L">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <a class="cart-btn" href="#">ADD TO CART</a>

                    <table class="size-table">
                        <thead>
                        <tr>
                            <th class="size">Size</th>
                            <th class="chest">Chest</th>
                            <th class="weist">Weist</th>
                            <th class="height">Height</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>S</th>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                        </tr>
                        <tr>
                            <th>L</th>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                            <td>99 ～ 99</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/'));?>" class="btnshine">戻る</a>

        </section>
    </main>


<?php get_footer() ?>