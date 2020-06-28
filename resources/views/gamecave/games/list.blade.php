@include('includes.header')
<!-- Header Ends Here -->
<!-- Games Page Starts here -->
<div class="games">
    <div class="container">
        <div class="page-path">
            <ul class="path-list">
                <li><a href="index.html">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
                <li class="act">Games</li>
            </ul>
            <p><a href="index.html">Back to Home</a></p>
            <div class="clearfix"></div>
        </div>
        <h3 class="page-header">
            List of Games Here
        </h3>
        <div class="main">
            @foreach($games as $game)
            <div class="view view-first">
                <img src="{{ URL::asset('storage/' . $game->image) }}" />
                <div class="mask">
                    <h2>{{ $game->name }}</h2>
                    <p>{{ $game->description }}</p>
                    <a href="{{route('game.single', ['id' => $game->id])}}" class="info">buy</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="side-bar">
            <h4>New games</h4>
            <ul class="game-list">
                <li><a href="games.html">Shooting</a></li>
                <li><a href="games.html">Action</a></li>
                <li><a href="games.html">Cars</a></li>
                <li><a href="games.html">Wressling</a></li>
                <li><a href="games.html">bikes</a></li>
                <li><a href="games.html">bicycle</a></li>
                <li><a href="games.html">Racing</a></li>
                <li><a href="games.html">Zombies</a></li>
            </ul>
            <h4>Old games</h4>
            <ul class="game-list">
                <li><a href="games.html">Shooting</a></li>
                <li><a href="games.html">Action</a></li>
                <li><a href="games.html">Cars</a></li>
                <li><a href="games.html">Wressling</a></li>
                <li><a href="games.html">bikes</a></li>
                <li><a href="games.html">bicycle</a></li>
                <li><a href="games.html">Racing</a></li>
                <li><a href="games.html">Zombies</a></li>
                <li><a href="games.html">Action</a></li>
                <li><a href="games.html">Cars</a></li>
                <li><a href="games.html">Wressling</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Games Page Ends here -->
<!-- What New Part starts Here -->
<div class="what-new">
    <div class="container">
        <h3>What's new</h3>
        <div class="blog-news">
            <div class="blog-news-grid">
                <div class="news-grid-left">
                    <h4>06</h4>
                    <small>of january 2015</small>
                </div>
                <div class="news-grid-right">
                    <h4>Claritas est etiam processus</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-news-grid b_n_g">
                <div class="news-grid-left">
                    <h4>28</h4>
                    <small>of january 2015</small>
                </div>
                <div class="news-grid-right">
                    <h4>Claritas est etiam processus</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="blog-news b_n">
            <div class="blog-news-grid">
                <div class="news-grid-left">
                    <h4>21</h4>
                    <small>of january 2015</small>
                </div>
                <div class="news-grid-right">
                    <h4>Claritas est etiam processus</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-news-grid b_n_g">
                <div class="news-grid-left">
                    <h4>05</h4>
                    <small>of january 2015</small>
                </div>
                <div class="news-grid-right">
                    <h4>Claritas est etiam processus</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- What New Part Endss Here -->
<!-- Footer Starts Here -->
@include('includes.footer')
