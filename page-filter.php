<?php
    /*Template Name: Course Template */
get_header();
?>
<body>
    <div class="main">
        <div class="container">
            <div class ="row">
                <div class="col-sm-3">
                        <div class="filters">
                            <div class="searchfilter">
                                <input type="text" id="searchProduct" placeholder="Search product">
                            </div> 
                            <div class="onclickfilter">
                                <button data-category="all">All</button>
                                <button data-category="T-Shirt">Mathematics</button>
                                <button data-category="Short">English</button>
                                <button data-category="Pants">Science</button>
                                <button data-category="Shoes">Social Science</button>
                            </div>
                            <div class="sortfilter">
                                <select id="sortOrder">
                                    <option value="">Sort by</option>
                                    <option value="lowest">Most Popular Topics</option>
                                    <option value="highest">Recent Updated </option>
                                </select>
                            </div>   
                    </div>
                </div>
                <div class="col-sm-9">
                <h1>Product Filter and Search</h1>
                    <div class="products">
                        <!-- Products will be dynamically inserted here -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
<?php
    /*Template Name: Home Template */
    get_footer();
?>
