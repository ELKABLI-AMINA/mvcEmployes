<?php
$data = new EmployesController();
$employes = $data->getAllEmployes();

?>

<div class="container">
                <div class="row my-4">
                                <div class="col-md-10 mx-auto">

 <div class="card">
                <div class="card-body bg-light">
                <table class="table table-hover">
 
                                
 <thead>
   <tr>
     <th scope="col">Nom & Prénom</th>
     <th scope="col">Matricule</th>
     <th scope="col">Département</th>
     <th scope="col">Poste</th>
     <th scope="col">Date Embauche</th>
     <th scope="col">Statut</th>
     <th scope="col">Action</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach($employes as $employe): ?>
          <tr>
            <th scope="row"><?= $employe['nom'].''.$employe['prenom'] ?></th>
            <td><?=$employe['matricule']  ?></td>
            <td><?=$employe['depart']  ?></td>
            <td><?=$employe['poste']  ?></td>
            <td><?=$employe['date_emb']  ?></td>
            <td><?=$employe['statut']  ?></td>
           
          </tr>
    <?php endforeach ?>
 </tbody>
</table>

                </div>

 </div>

                                </div>

                </div>

</div>