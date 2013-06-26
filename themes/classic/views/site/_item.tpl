	<div class="span4 benner-h2"  style="margin-left: 0px;padding: 10px;">
		<h2>Herbalife</h2>
		<div class="span12" style="margin-left: 0px;">
			<img src="{$Yii->baseUrl}/img/{$data->image}" alt="{if $data->alt_image==NULL}{$data->title}{else}{$data->alt_image}{/if}" />
		</div>
		<div class="span12 benner-h3" style="margin-left: 0px;">
			<h3>
				<a href="{$this->createUrl('site/item',['id'=>$data->id,'s'=>{$data->name|replace:[' ','---','--']:'-'}])}">{$data->name}</a>
			</h3>
		</div>
		<div class="span12">
			<p>{$data->sort_desc}</p>
		</div>
	</div>