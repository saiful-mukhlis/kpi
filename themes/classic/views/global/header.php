
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="brand" href="#"><?php echo Yii::t('app', 'Project Name')?></a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="#"><?php echo Yii::t('app', 'Home')?></a></li>
					<li class="dropdown"><a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t('app', 'Master')?> <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
							<li role="presentation"><?php echo CHtml::link('Departemen', array('departemen/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Devisi', array('devisi/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Golongan', array('golongan/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Karyawan', array('karyawan/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Periode', array('periode/index'));?></li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><?php echo CHtml::link('KRA', array('nilai/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Core', array('nilai2/index'));?></li>
							<li role="presentation"><?php echo CHtml::link('Standart Nilai', array('std-nilai/index'));?></li>
						</ul>
					</li>
					<?php 
					if (array_key_exists('actions', $this->page)) {
					?>
						<li class="dropdown"><a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Action <b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<?php 
									foreach ($this->page['actions'] as $v) {
										if ( array_key_exists('linkOptions', $v)) {
											echo '<li role="presentation">'.CHtml::link($v['label'],$v['url'],$v['linkOptions']).'</a></li>';
										}else{
											echo '<li role="presentation">'.CHtml::link($v['label'],$v['url']).'</a></li>';
										}
										
									}
								?>
							</ul>
						</li>
					<?php 						
					}
					?>					

				</ul>
				<ul class="nav pull-right">
					<li id="fat-menu" class="dropdown"><a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::app()->user->getState('nama');?> <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
							<li><a href="<?php echo $this->createUrl('site/logout')?>"><?php echo Yii::t('app', 'Log out')?></a></li>

						</ul></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>


