<?php 

class Post {
	private int $like;
	private string $author;

	public function setLike($l) {
		$this->like = $l;
	}

	public function getLike() {
		return $this->like;
	}

	public function setAuthor($n) {
		$this->author = ucfirst($n);
	}

	public function getAuthor() {
		return $this->author;
	}
}

$post = new Post();
$post->setLike(5);
$post->setAuthor('guilherme');

echo 'Post publicado por: '.$post->getAuthor();
echo '<br>';
echo $post->getLike().' Likes';