<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mais um site do Gabriel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <?php 
    $pages = get_pages([
     'parent' => 0
    ]);
    foreach ($pages as $page):
      $childPages = get_pages(['child_of' => $page->ID]);
      if(!count($childPages)){
        $link = get_page_link($page->ID);
        $title = $page->post_title;
        printf('<li class="nav-item active">
        <a class="nav-link" href="%s">%s</a></li>',$link,$title);
      }else{
        echo'<li class="nav-item dropdown">';
        printf ('  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
        %s
      </a>', $page->post_title);
        echo '<ul class="dropdown-menu" >';
      
        foreach($childPages as $child){
          $link = get_page_link($child->ID);
          $title = $child->post_title;
          printf ('<li dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item"  href="%s">%s</a></li>',$link,$title);

        }
        echo"</li></ul>";
      }
      endforeach;
   
    ?>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?php echo home_url('/'); ?>" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="s" value="<?php echo get_search_query(); ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
