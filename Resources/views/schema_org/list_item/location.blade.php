<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
	<div itemprop="item" itemscope itemtype="{{ $row->item_type_schema_org }}" itemid='#{{ $row->guid }}'>
			<a itemprop="url" href="{{ $row->url }}" content="{{ $row->url }}" >
				<span itemprop="name">{{ $row->title }}</span>
			</a>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <meta itemprop="addressLocality" content="{{ $row->locality }}" /> 
                <meta itemprop="addressRegion"  content="{{ $row->administrative_area_level_2_short }}" />
            </div>
	</div>
	 <meta itemprop="position" content="{{ $row->position }}" />
</li>