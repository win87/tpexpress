<div class="sub_header">
    <h2 style="margin-top:2px;"><?php echo @$title; ?></h2>
    <form class="searchform" method="get" role="search" />
        <input class="s" type="text" onblur="if(this.value=='') this.value='Site Search'" onfocus="if(this.value =='Site Search' ) this.value=''" value="Site Search" />
        <input class="searchsubmit" type="submit" value="" />
        <a onclick="document.getElementById('search-form').submit()"></a>
    </form>
</div>