<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
	<div itemprop="item" itemscope itemtype="{{ $row->item_type_schema_org }}" itemid='#{{ $row->guid }}'>
		<a itemprop="url" href="{{ $row->url }}" >
			<span itemprop="name">{{ $row->title }}</span>
		</a>
		<meta itemprop="image" content="{{ $row->image_src }}" >
        <meta itemprop="hasMenu" content="{{ $row->url }}/cuisine" >
        @foreach($row->cuisineCats as $cuisine_cat)
            <meta itemprop="servesCuisine" content="{{ $cuisine_cat->title }}" >
        @endforeach
        <meta itemprop="telephone" content="{{ $row->phone}} " >
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="streetAddress" content="{{ $row->route}}  , {{ $row->street_number}} " />
            <meta itemprop="addressLocality" content="{{ $row->locality}} " />
            <meta itemprop="addressRegion" content="{{ $row->administrative_area_level_2_short }} " /> 
            <meta itemprop="postalCode" content="{{ $row->postal_code }} " />
        </div>
	</div>
	<meta itemprop="position" content="{{ $row->position }}" />
</li>