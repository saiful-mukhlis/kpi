{*$this->page['menu']=[['label'=>'Create Departemen','url'=>['create']]]*}

{$page['menu']=[['label'=>'Create Departemen','url'=>['create']]]}

<h1>Data Departemen</h1>
{widget name='bootstrap.widgets.TbGridView' id='departemen-grid' dataProvider=$model->search() filter=$model
columns=['id','nama',['class'=>'bootstrap.widgets.TbButtonColumn']]}




