

<!DOCTYPE html>
<html lang="en">
<head>

</head>


@include('partials/header')
<body class="sidebar-gone light light-sidebar theme-white">


<main>

      <!-- Main Content -->
      <div class="main-content" style="min-height: 856px;" _msthidden="9">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-9">
                <div class="card author-box card-primary">
                  <div class="card-body">

                      <h4 _msttexthash="232882" _msthash="194">Listes Etudiants   </h4>

                      <div class="card-body">




                                  <table class="table table-striped table-md" >
                                    <div class="col-12 col-sm-12 col-lg-9">


                                        <th class="text-center pt-3 sorting_disabled" rowspan="1" colspan="1" aria-label=" &amp;nbsp;" style="width: 79.3125px;">  <!-- pour activer le criture en gras  -->


                                           <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">


                                          <table class="table-hover dataTable no-footer table table-striped  dataTables_filter " id="save-stage" style="width: 100%;" role="grid" aria-describedby="save-stage_info">




                                              <thead>
                                                <tr role="row">

                                                  <th>#</th>
                                                  <th _msttexthash="107536" _msthash="196">Matricule</th>
                                                  <th _msttexthash="31395" _msthash="195">Nom</th>
                                                  <th _msttexthash="80873" _msthash="197">E-mail</th>
                                                  <th _msttexthash="80873" _msthash="197">Filiere</th>
                                                  <th _msttexthash="80873" _msthash="197">Nivreau</th>
                                                  <th _msttexthash="80873" _msthash="197">Action</th>

                                                </tr>
                                              </thead>


                                              <tbody>

                                                @foreach($etudiants as $tables)
                                                  <tr>
                                                    <td _msttexthash="4459" _msthash="199">{{$tables->id}}</td>
                                                    <td _msttexthash="74035" _msthash="201">{{$tables->matricule}}</td>
                                                    <td _msttexthash="319917" _msthash="200"> {{$tables->nom}}</td>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->email}}</th>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->filiere}}</th>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->niveau}}</th>

                                                    <td>
                                                      <a href="{{ url('deleteEtudiant',$tables->id)}}" class="badge badge-danger" _msttexthash="88465" _msthash="213">Supprimer</a>
                                                    </td>
                                                  </tr>

                                                @endforeach
                                              </tbody>




                                        </div>
                                    </div>
                                  </table>
                              </table>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
</main>
@include('partials/footer')

</body>
</html>
