

<!DOCTYPE html>
<html lang="en">
<head>
<title>Creer Requete</title>
</head>



<body class="sidebar-gone light light-sidebar theme-white">


@include('partials/header')

<main>

    <!-- Main Content -->
    <div class="main-content" style="min-height: 856px;" _msthidden="9">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-9">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <form action="{{ url('Requetes') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h4 _msttexthash="568646" _msthash="181">Requetes</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">Matricule</label>
                                            <input type="text" class="form-control" value="{{ $etuMat }}"
                                                name="matricule" required>
                                            <div class="valid-feedback" _msttexthash="164762" _msthash="183">
                                                Remplissez ce champ
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">Filiere</label>
                                            <input type="text" class="form-control" value="{{ $etuFil }}"
                                                name="filiere" required>
                                            <div class="valid-feedback" _msttexthash="164762" _msthash="183">
                                                Remplissez ce champ
                                            </div>
                                            <div class="invalid-feedback" _msttexthash="164762" _msthash="183">
                                                Précisez !
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">Matiere</label>
                                            <input type="text" class="form-control" value="" name="matiere"
                                                required>
                                            <div class="valid-feedback" _msttexthash="164762" _msthash="183">
                                                Remplissez ce champ
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">A Monsieur/A Madame</label>
                                            <select class="form-control" name="nom" required>
                                                @foreach($teachers as $prof)
                                                <option>{{ $prof->nom }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback" _msttexthash="164762" _msthash="183">
                                                Précisez !
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">Objet</label>
                                            <select class="form-control" name="object" required>
                                                <option>Demande de rectification de matricule</option>
                                                <option>Demande de rectification sur mon nom</option>
                                                <option>Option 3</option>
                                            </select>
                                            <div class="invalid-feedback" _msttexthash="164762" _msthash="183">
                                                Précisez !
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label _msttexthash="117962" _msthash="182">Message</label>
                                            <div class="card author-box card-primary">
                                                <div class="card-body">
                                                    <div class="box">
                                                        <div>
                                                            <div>
                                                                <h2>Monsieur/Madame</h2>
                                                                <textarea style="resize: none; padding:10px;border-radius:20px;" name="reqMessage" id="" cols="80%" rows="10%" required></textarea>
                                                                <h3>Du coup, je tiens à vous présenter les
                                                                    documents suivants :</h3>
                                                                <div class="form-group">
                                                                    <label _msttexthash="117962" _msthash="182">
                                                                        Document
                                                                    </label>
                                                                    <select class="form-control" name="object" style="height: fit-content;" multiple required>
                                                                        <option>Une photo de mon acte de naissance</option>
                                                                        <option>Une photo de ma carte d'identité</option>
                                                                        <option>La photocopie de ma fiche d'inscription
                                                                            à l'université</option>
                                                                    </select>
                                                                    <div class="invalid-feedback"
                                                                        _msttexthash="164762" _msthash="183">
                                                                        Précisez !
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" _msttexthash="164762" _msthash="183" name="file">
                                            Entrez un texte !
                                        </div>
                                        <div class="form-group" name="reqPic">
                                            <label name="file">Fichier</label>
                                            <input type="file" name="images[]" class="form-control"
                                                accept=".jpg,.png,.jpeg,.pdf,.docx" multiple>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary" _msttexthash="98280" _msthash="189"
                                            type="submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Votre modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="successMessage"></p>
    </div>
</div>

<!-- JavaScript -->


@include('partials/footer')

</body>
</html>