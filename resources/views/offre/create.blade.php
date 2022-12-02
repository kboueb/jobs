@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="offre-card" style="width: 800px; margin: 0 auto;">
            <form action="{{ route('offre.store')}}" method="POST" class="row">
                @csrf
                <div class="form-group col-md-6 my-3">
                    <input type="text" class="form-control" name="reference_offre" id="reference_offre" placeholder="Référence de l'offre">
                </div>
                <div class="form-group col-md-6 my-3">
                    <input type="text" class="form-control" name="titre" placeholder="Titre de l'offre">
                </div>
                <div class="form-group col-md-6 my-3">
                    <input type="text" class="date_em form-control" name="date_emission" placeholder="Date d'émision">
                </div>
                <div class="form-group col-md-6 my-3">
                    <input type="text" class="date_ec form-control" name="date_echeance" placeholder="Date d'échéance">
                </div>
                <div class="form-group col-md-6 my-3">
                    <select class="form-select form-control" id="articles-contrat" name="contrat">
                        <option selected>Type de contrat</option>
                        <option value="stage">Stage</option>
                        <option value="consultant">Consultant(e)</option>
                        <option value="cdd">CDD</option>
                        <option value="cdi">CDI</option>
                    </select>
                </div>
                <div class="form-group col-md-6 my-3">
                    <select id="articles-fonction" class="form-select form-control" name="fonction">
                        <option value="">Fonction</option>
                        <option value="chef_comptable">Chef comptable</option>
                        <option value="chef_projet">Chef de projet éditorial</option>
                        <option value="community_manager">Community manager</option>
                        <option value="concepteur_web">Concepteur/trice rédacteur/trice</option>
                        <option value="dev_web">Développeur/euse Web</option>
                        <option value="dir_com">Directeur commercial</option>
                        <option value="dir_pfinance">Directeur du pôle Finance &amp; Contrôle</option>
                        <option value="dir_artistique">Directeur/trice artistique</option>
                        <option value="dir_editorial">Directeur/trice éditorial</option>
                        <option value="exe_graphique">Exécutant/e graphique</option>
                        <option value="integrateur_cms">Intégrateur/rice CMS</option>
                        <option value="integrateur_css_html">Intégrateur/rice CSS/HTML</option>
                    </select>
                </div>
                <div class="form-group col-md-6 my-3">
                    <select class="form-select form-control" id="articles-fonction" name="pays">
                        <option selected>Pays</option>
                        <option value="ci">Côte d'Ivoire</option>
                        <option value="fr">France</option>
                        <option value="sn">Sénégal</option>
                    </select>
                </div>
                <div class="form-group col-md-12 my-3">
                    <textarea class="ckeditor form-control" name="description_poste"></textarea>
                </div>
                <div class="form-group col-md-4 ">
                    <button class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#reference_offre').on('change', function (){
            console.log($(this).val());
            $('#reference_offre').val($('.date_em').val().replace(/-/g, '') + '-' + $('#articles-fonction').val());
        });

        $('#articles-fonction').on('change', function (){
            console.log($(this).val());
        });

        $('.date_em').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            closeText: 'Fermer',
            prevText: 'Précédent',
            nextText: 'Suivant',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            weekHeader: 'Sem.'
        });
        $('.date_ec').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            closeText: 'Fermer',
            prevText: 'Précédent',
            nextText: 'Suivant',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            weekHeader: 'Sem.'
        });
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });
    </script>
@endsection
