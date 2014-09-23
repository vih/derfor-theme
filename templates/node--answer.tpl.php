<?php
if(!$page) {
?>
	<div class="clearfix">
		<h2 style="float:right;"><?php echo $node->field_question_reference['und'][0]['entity']->title; ?></h2>
	</div>
	<p>
		<strong>
			<?php
			echo $node->field_question_reference['und'][0]['entity']->field_question['und'][0]['value'];
			?>
		</strong>
	</p>
	<p>
		<?php echo render($content['field_answer']); ?>
	</p>
	<a href="<?php echo $node_url; ?>">Læs hele svaret...</a>

<? } else { ?>
<div class="answernode">
	<h2>
		<?php
		echo $node->field_question_reference['und'][0]['entity']->title.': ';
		echo $node->field_question_reference['und'][0]['entity']->field_question['und'][0]['value'];
		?>
	</h2>
	<div class="answercontent">
		<p>
			<strong>Svar skrevet af</strong>:
			<?php
			$ds = ldap_connect('ldaps://ldap.ruc.dk/',636); // single connection
			ldap_bind($ds,'uid=derfor,ou=sysusr,dc=ruc,dc=dk','asygrLLJxRnEl9yOTBkP0o');
			$search = ldap_search($ds,"ou=users,dc=ruc,dc=dk", "uid=".$node->name); 
			$r = ldap_get_entries($ds,$search);
			echo $r[0]['cn'][0].", ";
			echo $r[0]['title'][0];
			?>
		</p>
		<?php echo render($content['field_answer']); ?>
	</div>
	<p>
		<?php 
		global $user;
		if(empty($user->uid)) {
			echo '<a href="'.url('cas',array('query'=>array('destination'=>$_GET['q']))).'" class="greybtn"><span></span>';
			echo 'Log ind for at stemme</a> ';
		}
		else {
			echo flag_create_link('answeragree', $node->nid);
		}
		global $user;
		$youFlagged = false;
		$flag = flag_get_flag('answeragree');
		if(!empty($user->uid)) { $youFlagged = $flag->is_flagged($node->nid,$user->uid); }
		$countFlags = $flag->get_count($node->nid);
		
		if($countFlags == 0) {
			//$msg = 'Ingen har markeret sig som enig';
		}
		elseif($youFlagged) {
			$f = ($countFlags-1);
			if($f == 0) {
				$msg = 'Du er enig i dette svar';
			}
			else {
				$msg = 'Du og ';
				$msg.= ($f == 1) ? 'en anden enig' : $f.' andre enige';
				$msg.= ' i dette svar';
			}
		}
		else {
			$msg = $countFlags.' er ';
			$msg.= ($countFlags == 1) ? 'enig' : 'enige';
			$msg.= ' i dette svar';
		}
		echo '<span class="agreemsg">'.$msg.'</span>';
		
		?>
	</p>
</div>
<?php } ?>
