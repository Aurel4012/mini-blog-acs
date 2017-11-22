<main>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <p>Posted on January 1, 2017 at 12:00 PM</p> <!-- généré en php -->

          <hr>

          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
 -->
        </div>

        <?php

        // '<div class="col-md-4 float-right">
        //   <div class="card my-4 sticky-top mt-5">
        //     <h5 class="card-header">Categories</h5>
        //       <div class="card-body">
        //         <select class="col-11">'
                 require_once 'model-categoryquery.php';
                require_once 'model-category.php';
                $id_categorie = 1;
                $category_query= new CategoryQuery($bdd);
                $category_liste= $category_query->getListeCategories();
                echo "<select>";

                foreach ($category_liste as $key => $value) {
                echo "<option>".$value['name']."</option>";
                    
                }
                echo "</select>";





                      // require_once 'model-categoryquery.php';
                      // require_once 'model-category.php';
                      // $id_categorie = 1;
                      // $category_query= new CategoryQuery($bdd);
                      // $category_liste= $category_query->getList($id_categorie);
                      // var_dump($category_liste);
                      // // for ($i=0; $i < count($category_name); $i++) { 
                      // //   echo "<option>".$category_name."</option>";
                      // // }

                      // foreach ($category_liste as $key => $value){
                      //   echo "<p>".$value['id_categorie']."</p>";
                      //   echo "<option>".$category_liste[$i]."</option>";
                      // }

                    //   '<option>15% (Ca va je gère!)</option>
                    //   <option>20% (C\'est le dernier!)</option>
                    //   <option>70% (Il est des nôtres!!)</option>
                    //   <option>+70% (J\'aoi% perdu mùon Mossepate!)</option>
                    // </select>'

                    ?>

            </div>
          </div>

        </div>

      </div>

    </div>
    </div>
    </div>
</main>


