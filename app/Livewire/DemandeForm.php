<?php

namespace App\Livewire;

use App\Models\Demande;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Demande - CED')]
class DemandeForm extends Component
{
    use WithFileUploads;

    public $user_id;

    // Identité
    public $nom;
    public $postnom;
    public $prenom;
    public $genre = 'Choisir votre Genre';
    public $lieu_naissance;
    public $date_naissance;
    public $photo;
    public $liste_pays = [];
    public $nationalite = '';
    public $type_identite = "Type Piece d'Identite";
    public $numero_identite;
    public $email_requerant;
    public $phone_requerant;
    public $addresse_requerant;
    public $lettre_demande_copy;
    public $piece_identite_copy;
    public $preuve_sejour_copy;

    // Université
    public $nom_univ_origine;
    public $nom_univ_fr;
    public $secteur_univ = 'Choisir Secteur';
    public $date_creation;
    public $pays_etude;
    public $province_ville_etude;
    public $siteweb_univ;
    public $email_univ;
    public $phone_univ;

    // Cursus
    public $grade = 'Choisir Grade Academique';
    public $option;
    public $num_diplome;
    public $date_diplome;
    public $date_debut_cursus;
    public $date_fin_cursus;
    public $mode_enseignement = 'Choisir Mode Enseignement';
    public $diplome_base_copy;
    public $diplome_univ_copy;
    public $releve_cote_copy;

    public function mount()
    {
        $this->liste_pays = [
            'AF' => 'Afghanistan',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua and Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia and Herzegovina',
            'BW' => 'Botswana',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'VG' => 'British Virgin Islands',
            'BN' => 'Brunei',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CW' => 'Curacao',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'CD' => 'Democratic Republic of the Congo',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'TL' => 'East Timor',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'PF' => 'French Polynesia',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'CI' => 'Ivory Coast',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'XK' => 'Kosovo',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Laos',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macau',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'KP' => 'North Korea',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestine',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'CG' => 'Republic of the Congo',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russia',
            'RW' => 'Rwanda',
            'BL' => 'Saint Barthelemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts and Nevis',
            'LC' => 'Saint Lucia',
            'MF' => 'Saint Martin',
            'PM' => 'Saint Pierre and Miquelon',
            'VC' => 'Saint Vincent and the Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome and Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SX' => 'Sint Maarten',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'KR' => 'South Korea',
            'SS' => 'South Sudan',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard and Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syria',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad and Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks and Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VA' => 'Vatican',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'WF' => 'Wallis and Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        ];
    }

    public function demander()
    {
        $this->validate([
            // 'user_id' => 'required',
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'lieu_naissance' => 'required',
            'date_naissance' => 'required|date',
            'photo' => 'required|image|max:1024',
            'nationalite' => 'required',
            'type_identite' => 'required',
            'numero_identite' => 'required',
            'email_requerant' => 'required|email',
            'phone_requerant' => 'required|numeric',
            'addresse_requerant' => 'required',
            'piece_identite_copy' => 'required|file|mimes:pdf|max:2048',
            'preuve_sejour_copy' => 'required|file|mimes:pdf|max:2048',
            'nom_univ_origine' => 'required',
            'nom_univ_fr' => 'required',
            'secteur_univ' => 'required',
            'date_creation' => 'required|date',
            'pays_etude' => 'required',
            'province_ville_etude' => 'required',
            'siteweb_univ' => 'required|url',
            'email_univ' => 'required|email',
            'phone_univ' => 'required|numeric',
            'grade' => 'required',
            'option' => 'required',
            'num_diplome' => 'required',
            'date_diplome' => 'required|date',
            'date_debut_cursus' => 'required|date',
            'date_fin_cursus' => 'required|date',
            'diplome_base_copy' => 'required|file|mimes:pdf|max:2048',
            'diplome_univ_copy' => 'required|file|mimes:pdf|max:2048',
            'releve_cote_copy' => 'required|file|mimes:pdf|max:2048',
            'lettre_demande_copy' => 'required|file|mimes:pdf|max:2048',
            'mode_enseignement' => 'required',
        ]);

        // Store each file in a different folder
        $photoPath = $this->photo->store('photos', 'public');
        $pieceIdentitePath = $this->piece_identite_copy->store('piece_identite', 'public');
        $preuveSejourPath = $this->preuve_sejour_copy->store('preuve_sejour', 'public');
        $lettreDemandePath = $this->lettre_demande_copy->store('lettre_demande', 'public');
        $diplomeBasePath = $this->diplome_base_copy->store('diplome_base', 'public');
        $diplomeUnivPath = $this->diplome_univ_copy->store('diplome_univ', 'public');
        $releveCotePath = $this->releve_cote_copy->store('releve_cote', 'public');

        // Save file paths or other processing
        Demande::create([
            'photo' => $photoPath,
            'piece_identite_copy' => $pieceIdentitePath,
            'preuve_sejour_copy' => $preuveSejourPath,
            'lettre_demande_copy' => $lettreDemandePath,
            'diplome_base_copy' => $diplomeBasePath,
            'diplome_univ_copy' => $diplomeUnivPath,
            'releve_cote_copy' => $releveCotePath,
            'user_id' => auth()->user()->id,
            'nom' => $this->nom,
            'postnom' => $this->postnom,
            'prenom' => $this->prenom,
            'genre' => $this->genre,
            'lieu_naissance' => $this->lieu_naissance,
            'date_naissance' => $this->date_naissance,
            'nationalite' => $this->nationalite,
            'type_identite' => $this->type_identite,
            'numero_identite' => $this->numero_identite,
            'email_requerant' => $this->email_requerant,
            'phone_requerant' => $this->phone_requerant,
            'addresse_requerant' => $this->addresse_requerant,
            'nom_univ_origine' => $this->nom_univ_origine,
            'nom_univ_fr' => $this->nom_univ_fr,
            'secteur_univ' => $this->secteur_univ,
            'date_creation' => $this->date_creation,
            'pays_etude' => $this->pays_etude,
            'province_ville_etude' => $this->province_ville_etude,
            'siteweb_univ' => $this->siteweb_univ,
            'email_univ' => $this->email_univ,
            'phone_univ' => $this->phone_univ,
            'grade' => $this->grade,
            'option' => $this->option,
            'num_diplome' => $this->num_diplome,
            'date_diplome' => $this->date_diplome,
            'date_debut_cursus' => $this->date_debut_cursus,
            'date_fin_cursus' => $this->date_fin_cursus,
            'mode_enseignement' => $this->mode_enseignement,
        ]);

        // Show success message
        session()->flash('message', 'Demande soumise avec succès.');

        // Reset form fields
        $this->reset([
            'diplome_base_copy',
            'diplome_univ_copy',
            'releve_cote_copy',
            'lettre_demande_copy',
            'photo',
            'piece_identite_copy',
            'preuve_sejour_copy'
        ]);

        // Redirect to another page
        return redirect()->route('user.espace');
    }

    public function render()
    {
        return view('livewire.demande-form');
    }
}
