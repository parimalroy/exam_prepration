
<div class="footer-top">
    <div class="container">
        @foreach($allPublicationExamCategories as $allPublicationExamCategorie)
        <div class="col-md-4 footer-in">
            <h4><i> </i>{{$allPublicationExamCategorie->exam_category_name}}</h4>
            
                <?php 
                    $allExamSubcategories=DB::table('tbl_exam_sub_cate')
//                              ->select('*')
//                              ->where('publication_status',1)
                              ->where('exam_categorie_id',$allPublicationExamCategorie->examCateid)
                              ->join('tbl_exam_cate', 'tbl_exam_sub_cate.exam_categorie_id', '=', 'tbl_exam_cate.examCateid')
                              ->select('tbl_exam_sub_cate.*','tbl_exam_cate.*')
                              ->get();
                    foreach($allExamSubcategories as $allExamSubcategorie){
                ?>
            <i><a href="">{{$allExamSubcategorie->exam_sub_category_name}}</a></i>
              <?php } ?>
        </div>
        @endforeach
<!--        <div class="col-md-4 footer-in">
            <h4><i class="cross"> </i>Suspendisse sed</h4>
            <p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="col-md-4 footer-in">
            <h4><i class="down"> </i>Suspendisse sed</h4>
            <p>Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, consectetur.</p>
        </div>-->
        <div class="clearfix"></div>
    </div>
</div>
<!---->
<div class="footer-middle">
    <div class="container">
        <div class="footer-middle-in">
            <h6>About us</h6>
            <p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
        </div>
        <div class="footer-middle-in">
            <h6>Information</h6>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
        <div class="footer-middle-in">
            <h6>Customer Service</h6>
            <ul>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div>
        <div class="footer-middle-in">
            <h6>My Account</h6>
            <ul>
                <li><a href="account.html">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="wishlist.html">Wish List</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>
        </div>
        <div class="footer-middle-in">
            <h6>Extras</h6>
            <ul>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Gift Vouchers</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Specials</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<p class="footer-class">Copyright © 2017 Modern Template  </p>