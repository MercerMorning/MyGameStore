@include('includes.header')
<!-- Header Ends Here -->
<!-- Games Page Starts here -->
<div class="games">
    <div class="container">
        <div class="page-path">
            <ul class="path-list">
                <li><a href="index.html">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
                <li><a href="blog.html">Blog</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
                <li class="act">Details</li>
            </ul>
            <p><a href="index.html">Back to Home</a></p>
            <div class="clearfix"></div>
        </div>
        <h3 class="page-header">
            Recent Blogs
        </h3>
        <div class="blog-content">
            <div class="blog-post">
                <h3><a href="#">{{ $game->name }}</a></h3>
                <div class="post-details">
                    <p>Posted By <a href="#">Jackie</a> &nbsp;&nbsp; On <span>15 jan, 2015</span> &nbsp;&nbsp; Comments<span>(10)</span></p>
                </div>
                <img src="{{ URL::asset('storage/' . $game->image) }}" alt="">
                <p>{{ $game->description }}</p>
                <ul>
                    @foreach($prices as $price)
                        <li>
                            <a href="{{route('game.link', ['siteName' => $price->name,'gameName' => $price->description])}}">
                                {{ $price->name }}
                            </a>
                            <p>{{ $price->price }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="comment-box">
                <h3 class="page-header">Comment Here </h3>
                <div class="text-cmt">
                    <input type="text" placeholder="Name" required=""/>
                    <input type="text" placeholder="Email" required=""/>
                </div>
                <div class="text-cmt">
                    <textarea placeholder="Message" required=""></textarea>
                </div>
                <div class="text-cmt">
                    <input type="submit" />
                </div>
            </div>
        </div>
        <div class="blog-sidebar">
            <h3 class="page-header">Catgeories</h3>
            <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Shooting</a> <span class="count">(14)</span></li>
                <li class="cat-item cat-item-60"><a href="#">Action</a> <span class="count">(2)</span></li>
                <li class="cat-item cat-item-63"><a href="#">Gloves</a> <span class="count">(2)</span></li>
                <li class="cat-item cat-item-54"><a href="#">Cars</a> <span class="count">(8)</span></li>
                <li class="cat-item cat-item-55"><a href="#">Racing</a> <span class="count">(11)</span></li>
                <li class="cat-item cat-item-64"><a href="#">Sports</a> <span class="count">(3)</span></li>
                <li class="cat-item cat-item-61"><a href="#">Style</a> <span class="count">(3)</span></li>
                <li class="cat-item cat-item-56"><a href="#">Bikes</a> <span class="count">(6)</span></li>
                <li class="cat-item cat-item-57"><a href="#">Zombies</a> <span class="count">(13)</span></li>
                <li class="cat-item cat-item-58"><a href="#">Wressling</a> <span class="count">(7)</span></li>
                <li class="cat-item cat-item-62"><a href="#">Watchers</a> <span class="count">(2)</span></li>
                <li class="cat-item cat-item-41"><a href="#">Women</a> <span class="count">(17)</span></li>
            </ul>
            <h3 class="page-header">Subscribe</h3>
            <div class="subscribe">
                <h4>Subscribe For News</h4>
                <input type="text" placeholder="Email.." required="" />
                <input type="submit" value="Subscribe" />
            </div>
            <h3 class="page-header">Papular Tags</h3>
            <ul class="tags_links">
                <li><a href="#">Design</a></li>
                <li><a href="#">Branding</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Developing</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Photography</a></li>
            </ul>

        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- What New Part Endss Here -->
<!-- Footer Starts Here -->
@include('includes.footer')
