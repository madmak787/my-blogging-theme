<div class="header-search-wrap novis_sarch">
    <div class="widget-inner">
        <form action="<?= home_url( '/' ) ?>">
            <input name="s" id="se" type="text" class="search" placeholder="Search..." value="<?= $_GET['s'] ?? '' ?>" />
            <button type="submit" class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
        </form>
    </div>
</div>