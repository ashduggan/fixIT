
<?php
class BinaryTree{

    protected $root; // the root node of our tree

    public function __construct() {
        $this->root = null;
    }
	
	public function insert($item) {
		$node = new BinaryNode($item);
		if ($this->isEmpty()) {
			// Empty tree
			$this->root = $node;
		}
		else{
			// insert the node in tree
			$this->insertNode($node, $this->root);
		}
	}
 
	protected function insertNode($node, $subtree) {
        if ($subtree === null) { //Subtree is empty
            $subtree = $node;
        }
		
        else {
            if ($node->value > $subtree->value) {
                $this->insertNode($node, $subtree->right);
            }
            elseif ($node->value < $subtree->value) {
                $this->insertNode($node, $subtree->left);
            }
            else {
                break;
            }
        }
    }
	
	public function search($value){
        $node = $this->root;

        while($node) {
            if ($value > $node->value){
                $node = $node->right;
            } 
			elseif ($value < $node->value){
                $node = $node->left;
            } 
			else {
                break;
            }
        }
        return $node;
    }
	
	 public function isEmpty(){
        return $this->root === null;
    }
}
?>