<?php

function displayPost($post,$max_lenght =100){

		$content =$post['content'];
		if($max_lenght >0 && strlen($content) > $max_lenght ){
			$content =substr($content,0 ,$max_lenght).'...';
			$content.='<a href ="post.php?id='. $post['id'] .'">Lire la suite</a>';
		}

	$html= '<div class="post">
	     <p>'. date('d/m/Y H:i:s', strtotime($post['date'])) .' par <a href="search.php?search='. $post['auteur'] .'"> '.$post['auteur'] .'</a></p>

	    <blockquote>
	    <p>'.nl2br($content).'</p>
	    </blockquote>
	</div>';
	return $html;

}


