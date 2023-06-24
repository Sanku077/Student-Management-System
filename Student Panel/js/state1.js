var country = ["Select", "Afghanistan", "American", "Australia", "Bangladesh", "Bhutan", "Brazil",
    "France", "Germany", "India", "Italy", "Japan"];

/*Function for city*/
$(function () {
    var options = '';
    for (var i = 0; i < country.length; i++) {
        options += '<option value="' + country[i] + '">' + country[i] + '</option>';
    }
    $('#listBox1').html(options);
});
function selct_country($val) {
    if ($val == 'Select') {
        var options = '';
        $('#listBox').html(options);
    }

    /*India Country Start*/
    if ($val == 'India') {
        var india = ["Select", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka",
            "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Puducherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu",
            "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal"];
        $(function () {
            var options = '';
            for (var i = 0; i < india.length; i++) {
                options += '<option value="' + india[i] + '">' + india[i] + '</option>';

            }

            $('#listBox').html(options);
        });
    }
    /*India Country End*/
    /**/
    if ($val == 'Australia') {
        var australia = ["Select", "New South Wales", "Queenland", "Tasmania", "Western Australia", "Victoria", "South Australia"];
        var australia_c = ["Select", "Sydney", "Melbourne", "Brisbane", "Perth", "Adelaide", "Gold Coast", "Canberra", "Newcastle", "Wollongong",
            "Geelong", "Hobart", "Townsville", "Ipswich", "Cairns", "Toowoomba", "Darwin", "Ballarat", "Bendigo",
            "Launceston", "Mackay", "Rockhampton", "Maitland", "Bunbury", "Coffs Harbour", "Bundaberg", "Wagga Wagga",
            "Hervey Bay", "Shepparton", "Albury", "Port Macquarie", "Pakenham", "Tamworth", "Caloundra",
            "Orange", "Dubbo", "Geraldton", "Nowra", "Bathurst", "Queanbeyan", "Frankston", "Sunbury", "Warrnambool"]
        $(function () {
            var options = '';
            var options1 = '';
            for (var i = 0; i < australia.length; i++) {
                options += '<option value="' + australia[i] + '">' + australia[i] + '</option>';
            }
            for (var i = 0; i < australia_c.length; i++) {
                options1 += '<option value="' + australia_c[i] + '">' + australia_c[i] + '</option>';
            }
            $('#listBox').html(options);
            $('#secondlist').html(options1);
        });
    }

    if ($val == 'Afghanistan') {
        var afghanistan = ["Select", "Kabul", "Kandahar", "Jalalabad", "Bamyan", "Ghazni", "Taleqan", "Khuduz", "Badghis", "Pol-e-Khomri", "Mitariam", "Qala-e-naw", "Baikh", "Maymana", "Charikar",
            "Nilli", "Maidan Shahr", "Ayabk", "Bazarak"];
        $(function () {
            var options = '';
            for (var i = 0; i < afghanistan.length; i++) {
                options += '<option value="' + afghanistan[i] + '">' + afghanistan[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'American') {
        var american = ["Select", "Alabama ", "Alaska ", "Arizona ", "California", "Colorado", "Florida ", "Hawaii", "Louisiana",
            "Nevada", "New Jersey", "New Mexico ", "New York", "Washington"];
        $(function () {
            var options = '';
            for (var i = 0; i < american.length; i++) {
                options += '<option value="' + american[i] + '">' + american[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }
    /*Bhutan Started here*/
    if ($val == 'Bhutan') {
        var bhutan = ["Select", "Bumthang", "Trongsa", "Punakha", "Thimphu", "Paro", "Wangdue", "Chukha", "Samtse", "Tserang", "Haa", "Gasa", "Mongar", "Trashigang",
            "Lhuntse", "Tashi Yangtse", "Pemagatshel", "Samdrup Jongkhar", "Lhuntse", "Dagana "];
        var bhutan_cities = ["Select", "Bumthang", "Trongsa", "Punakha", "Thimphu", "Paro", "Wangdue", "Chukha", "Samtse", "Tserang", "Haa", "Gasa", "Mongar", "Trashigang",
            "Lhuntse", "Tashi Yangtse", "Pemagatshel", "Samdrup Jongkhar", "Lhuntse", "Dagana "];
        $(function () {
            var options = '';
            var options1 = '';
            for (var i = 0; i < bhutan.length; i++) {
                options += '<option value="' + bhutan[i] + '">' + bhutan[i] + '</option>';
            }
            for (var i = 0; i < bhutan_cities.length; i++) {
                options1 += '<option value="' + bhutan_cities[i] + '">' + bhutan_cities[i] + '</option>';
            }
            $('#listBox').html(options);
            $('#secondlist').html(options1);

        });
    }
    /*Bhutan Ended here*/
    if ($val == 'Bangladesh') {
        var bangladesh = ["Select", "Mymensingh", "Rajshahi", "Dhaka", "Chittagong", "Khulna", "Barisal", "Sylhet", "Rangpur"];
        $(function () {
            var options = '';
            for (var i = 0; i < bangladesh.length; i++) {
                options += '<option value="' + bangladesh[i] + '">' + bangladesh[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'Brazil') {
        var brazil = ["Select", "Acre", "Alagoas", "Amazonas", "Amapá", "Amapá", "Ceará", "Distrito Federal", "Goiás", "Maranhão", "Pará", "Paraná", "Santa Catarina"];
        $(function () {
            var options = '';
            for (var i = 0; i < brazil.length; i++) {
                options += '<option value="' + brazil[i] + '">' + brazil[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'France') {
        var france = ["Select", "Alsace", "Amapa", "Centre", "Franche Comte", "Ile De France", "Limousin", "Moyotte", "Picardie", "Rhone Alpes", "Bretagne", "Guinaa"];
        $(function () {
            var options = '';
            for (var i = 0; i < france.length; i++) {
                options += '<option value="' + france[i] + '">' + france[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'Germany') {
        var germany = ["Select", "Berlin", "Bayern", "Lower Saxony", "Baden-Württemberg", "Rhineland-Palatinate", "Saxony", "Thuringia", "Hessen", "North Rhine-Westphalia", "Brandenburg", "Hamburg", "Saarland", "Bremen"];
        $(function () {
            var options = '';
            for (var i = 0; i < germany.length; i++) {
                options += '<option value="' + germany[i] + '">' + germany[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'Italy') {
        var italy = ["Select", "Abruzzo", "Apulia", "Basilicata", "Calabria", "Campania", "Lazio", "Liguria", "Lombardia", "Marche", "Molise",
            "Piemonte", "Sardegna", "Sicily", "Umbria", "Veneto"];
        $(function () {
            var options = '';
            for (var i = 0; i < italy.length; i++) {
                options += '<option value="' + italy[i] + '">' + italy[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }

    if ($val == 'Japan') {
        var japan = ["Select", "Akita", "Aomori", "Chiba", "Fukushima", "Ibaragi", "Kochi",
            "Kyoto", "Miyagi", "Nagasaki", "Saga", "Tokushima"];
        $(function () {
            var options = '';
            for (var i = 0; i < japan.length; i++) {
                options += '<option value="' + japan[i] + '">' + japan[i] + '</option>';
            }
            $('#listBox').html(options);
        });
    }
}

/*cities from Selected District start*/

function selct_state($val) {
    if ($val == 'Select') {
        var options = '';
        $('#secondlist').html(options);
    }
    /*Cities form India Start*/
    if ($val == 'Maharashtra') {
        var maha = ["Select", "Ahmednagar", "Akola", "Alibag", "Amaravati", "Arnala", "Aurangabad", "Aurangabad", "Bandra", "Bassain", "Belapur", "Bhiwandi", "Bhusaval", "Borliai-Mandla", "Chandrapur", "Dahanu", "Daulatabad", "Dighi (Pune)", "Dombivali", "Goa", "Jaitapur", "Jalgaon",
            "Jawaharlal Nehru (Nhava Sheva)", "Kalyan", "Karanja", "Kelwa", "Khopoli", "Kolhapur", "Lonavale", "Malegaon", "Malwan", "Manori",
            "Mira Bhayandar", "Miraj", "Mumbai (ex Bombay)", "Murad", "Nagapur", "Nagpur", "Nalasopara", "Nanded", "Nandgaon", "Nasik", "Navi Mumbai", "Nhave", "Osmanabad", "Palghar",
            "Panvel", "Pimpri", "Pune", "Ratnagiri", "Sholapur", "Shrirampur", "Shriwardhan", "Tarapur", "Thana", "Thane", "Trombay", "Varsova", "Vengurla", "Virar", "Washim", "Wada"];
        $(function () {
            var options = '';
            for (var i = 0; i < maha.length; i++) {
                options += '<option value="' + maha[i] + '">' + maha[i] + '</option>';

            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Andhra Pradesh') {
        var andhra = ["Select", "Anantapur", "Chittoor", "East Godavari", "Guntur", "Krishna", "Kurnool", "Prakasam", "Srikakulam", "SriPotti Sri Ramulu Nellore",
            "Vishakhapatnam", "Vizianagaram", "West Godavari", "Cudappah"];
        $(function () {
            var options = '';
            for (var i = 0; i < andhra.length; i++) {
                options += '<option value="' + andhra[i] + '">' + andhra[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Arunachal Pradesh') {
        var ap = ["Select", "Anjaw", "Changlang", "Dibang Valley", "East Siang", "East Kameng", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Papum Pare",
            "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang"];
        $(function () {
            var options = '';
            for (var i = 0; i < ap.length; i++) {
                options += '<option value="' + ap[i] + '">' + ap[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Assam') {
        var assam = ["Select", "Baksa", "Barpeta", "Bongaigaon", "Cachar", "Chirang", "Darrang", "Dhemaji", "Dima Hasao", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Jorhat",
            "Kamrup", "Kamrup Metropolitan", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Morigaon", "Nagaon", "Nalbari", "Sivasagar", "Sonitpur", "Tinsukia", "Udalguri"];
        $(function () {
            var options = '';
            for (var i = 0; i < assam.length; i++) {
                options += '<option value="' + assam[i] + '">' + assam[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Bihar') {
        var bihar = ["Select", "Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur",
            "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa",
            "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"];
        $(function () {
            var options = '';
            for (var i = 0; i < bihar.length; i++) {
                options += '<option value="' + bihar[i] + '">' + bihar[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Chhattisgarh') {
        var Chhattisgarh = ["Select", "Bastar", "Bijapur", "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Jashpur", "Janjgir-Champa", "Korba", "Koriya", "Kanker", "Kabirdham (formerly Kawardha)", "Mahasamund",
            "Narayanpur", "Raigarh", "Rajnandgaon", "Raipur", "Surajpur", "Surguja"];
        $(function () {
            var options = '';
            for (var i = 0; i < Chhattisgarh.length; i++) {
                options += '<option value="' + Chhattisgarh[i] + '">' + Chhattisgarh[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Dadra and Nagar Haveli') {
        var dadra = ["Select", "Amal", "Silvassa"];
        $(function () {
            var options = '';
            for (var i = 0; i < dadra.length; i++) {
                options += '<option value="' + dadra[i] + '">' + dadra[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Daman and Diu') {
        var daman = ["Select", "Daman", "Diu"];
        $(function () {
            var options = '';
            for (var i = 0; i < daman.length; i++) {
                options += '<option value="' + daman[i] + '">' + daman[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Delhi') {
        var delhi = ["Select", "Delhi", "New Delhi", "North Delhi", "Noida", "Patparganj", "Sonabarsa", "Tughlakabad"];
        $(function () {
            var options = '';
            for (var i = 0; i < delhi.length; i++) {
                options += '<option value="' + delhi[i] + '">' + delhi[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Goa') {
        var goa = ["Select", "Chapora", "Dabolim", "Madgaon", "Marmugao (Marmagao)", "Panaji Port", "Panjim", "Pellet Plant Jetty/Shiroda", "Talpona", "Vasco da Gama"];
        $(function () {
            var options = '';
            for (var i = 0; i < goa.length; i++) {
                options += '<option value="' + goa[i] + '">' + goa[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Gujarat') {
        var gujarat = ["Select", "Ahmedabad", "Amreli district", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Dahod", "Dang", "Gandhinagar", "Jamnagar", "Junagadh",
            "Kutch", "Kheda", "Mehsana", "Narmada", "Navsari", "Patan", "Panchmahal", "Porbandar", "Rajkot", "Sabarkantha", "Surendranagar", "Surat", "Tapi", "Vadodara", "Valsad"];
        $(function () {
            var options = '';
            for (var i = 0; i < gujarat.length; i++) {
                options += '<option value="' + gujarat[i] + '">' + gujarat[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Haryana') {
        var haryana = ["Select", "Ambala", "Bhiwani", "Faridabad", "Fatehabad", "Gurgaon", "Hissar", "Jhajjar", "Jind", "Karnal", "Kaithal",
            "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamuna Nagar"];
        $(function () {
            var options = '';
            for (var i = 0; i < haryana.length; i++) {
                options += '<option value="' + haryana[i] + '">' + haryana[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Himachal Pradesh') {
        var himachal = ["Select", "Baddi", "Baitalpur", "Chamba", "Dharamsala", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul & Spiti", "Mandi", "Simla", "Sirmaur", "Solan", "Una"];
        $(function () {
            var options = '';
            for (var i = 0; i < himachal.length; i++) {
                options += '<option value="' + himachal[i] + '">' + himachal[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Jammu and Kashmir') {
        var jammu = ["Select", "Jammu", "Leh", "Rajouri", "Srinagar"];
        $(function () {
            var options = '';
            for (var i = 0; i < jammu.length; i++) {
                options += '<option value="' + jammu[i] + '">' + jammu[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Jharkhand') {
        var jharkhand = ["Select", "Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribag", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu",
            "Ramgarh", "Ranchi", "Sahibganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"];
        $(function () {
            var options = '';
            for (var i = 0; i < jharkhand.length; i++) {
                options += '<option value="' + jharkhand[i] + '">' + jharkhand[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Karnataka') {
        var karnataka = ["Select", "Bagalkot", "Bangalore", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Bijapur", "Chamarajnagar", "Chikkamagaluru", "Chikkaballapur",
            "Chitradurga", "Davanagere", "Dharwad", "Dakshina Kannada", "Gadag", "Gulbarga", "Hassan", "Haveri district", "Kodagu",
            "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Ramanagara", "Yadgir"];
        $(function () {
            var options = '';
            for (var i = 0; i < karnataka.length; i++) {
                options += '<option value="' + karnataka[i] + '">' + karnataka[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Kerala') {
        var kerala = ["Select", "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thrissur", "Thiruvananthapuram", "Wayanad"];
        $(function () {
            var options = '';
            for (var i = 0; i < kerala.length; i++) {
                options += '<option value="' + kerala[i] + '">' + kerala[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Madhya Pradesh') {
        var mp = ["Select", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhilai", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Dewas", "Dhar", "Guna", "Gwalior", "Hoshangabad",
            "Indore", "Itarsi", "Jabalpur", "Khajuraho", "Khandwa", "Khargone", "Malanpur", "Malanpuri (Gwalior)", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Pithampur", "Raipur", "Raisen", "Ratlam",
            "Rewa", "Sagar", "Satna", "Sehore", "Seoni", "Shahdol", "Singrauli", "Ujjain"];
        $(function () {
            var options = '';
            for (var i = 0; i < mp.length; i++) {
                options += '<option value="' + mp[i] + '">' + mp[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Manipur') {
        var manipur = ["Select", "Bishnupur", "Churachandpur", "Chandel", "Imphal East", "Senapati", "Tamenglong", "Thoubal", "Ukhrul", "Imphal West"];
        $(function () {
            var options = '';
            for (var i = 0; i < manipur.length; i++) {
                options += '<option value="' + manipur[i] + '">' + manipur[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Meghalaya') {
        var meghalaya = ["Select", "Baghamara", "Balet", "Barsora", "Bolanganj", "Dalu", "Dawki", "Ghasuapara", "Mahendraganj", "Moreh", "Ryngku", "Shella Bazar", "Shillong"];
        $(function () {
            var options = '';
            for (var i = 0; i < meghalaya.length; i++) {
                options += '<option value="' + meghalaya[i] + '">' + meghalaya[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Mizoram') {
        var mizoram = ["Select", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"];
        $(function () {
            var options = '';
            for (var i = 0; i < mizoram.length; i++) {
                options += '<option value="' + mizoram[i] + '">' + mizoram[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Nagaland') {
        var nagaland = ["Select", "Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang", "Wokha", "Zunheboto"];
        $(function () {
            var options = '';
            for (var i = 0; i < nagaland.length; i++) {
                options += '<option value="' + nagaland[i] + '">' + nagaland[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Orissa') {
        var orissa = ["Select", "Bahabal Pur", "Bhubaneswar", "Chandbali", "Gopalpur", "Jeypore", "Paradip Garh", "Puri", "Rourkela"];
        $(function () {
            var options = '';
            for (var i = 0; i < orissa.length; i++) {
                options += '<option value="' + orissa[i] + '">' + orissa[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Puducherry') {
        var puducherry = ["Select", "Karaikal", "Mahe", "Pondicherry", "Yanam"];
        $(function () {
            var options = '';
            for (var i = 0; i < puducherry.length; i++) {
                options += '<option value="' + puducherry[i] + '">' + puducherry[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Punjab') {
        var punjab = ["Select", "Amritsar", "Barnala", "Bathinda", "Firozpur", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Sri Muktsar Sahib", "Pathankot",
            "Patiala", "Rupnagar", "Ajitgarh (Mohali)", "Sangrur", "Shahid Bhagat Singh Nagar", "Tarn Taran"];
        $(function () {
            var options = '';
            for (var i = 0; i < punjab.length; i++) {
                options += '<option value="' + punjab[i] + '">' + napunjabgaland[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Rajasthan') {
        var rajasthan = ["Select", "Ajmer", "Banswara", "Barmer", "Barmer Rail Station", "Basni", "Beawar", "Bharatpur", "Bhilwara", "Bhiwadi", "Bikaner", "Bongaigaon", "Boranada, Jodhpur", "Chittaurgarh", "Fazilka", "Ganganagar", "Jaipur", "Jaipur-Kanakpura",
            "Jaipur-Sitapura", "Jaisalmer", "Jodhpur", "Jodhpur-Bhagat Ki Kothi", "Jodhpur-Thar", "Kardhan", "Kota", "Munabao Rail Station", "Nagaur", "Rajsamand", "Sawaimadhopur", "Shahdol", "Shimoga", "Tonk", "Udaipur"];
        $(function () {
            var options = '';
            for (var i = 0; i < rajasthan.length; i++) {
                options += '<option value="' + rajasthan[i] + '">' + rajasthan[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Sikkim') {
        var sikkim = ["Select", "Chamurci", "Gangtok"];
        $(function () {
            var options = '';
            for (var i = 0; i < sikkim.length; i++) {
                options += '<option value="' + sikkim[i] + '">' + sikkim[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Tamil Nadu') {
        var tn = ["Select", "Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Mandapam", "Nagapattinam", "Nilgiris", "Namakkal", "Perambalur", "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Thiruvallur", "Tirupur",
            "Tiruchirapalli", "Theni", "Tirunelveli", "Thanjavur", "Thoothukudi", "Tiruvallur", "Tiruvannamalai", "Vellore", "Villupuram", "Viruthunagar"];
        $(function () {
            var options = '';
            for (var i = 0; i < tn.length; i++) {
                options += '<option value="' + tn[i] + '">' + tn[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Telangana') {
        var telangana = ["Select", "Adilabad", "Hyderabad", "Karimnagar", "Mahbubnagar", "Medak", "Nalgonda", "Nizamabad", "Ranga Reddy", "Warangal"];
        $(function () {
            var options = '';
            for (var i = 0; i < telangana.length; i++) {
                options += '<option value="' + telangana[i] + '">' + telangana[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Tripura') {
        var tripura = ["Select", "Agartala", "Dhalaighat", "Kailashahar", "Kamalpur", "Kanchanpur", "Kel Sahar Subdivision", "Khowai", "Khowaighat", "Mahurighat", "Old Raghna Bazar", "Sabroom", "Srimantapur"];
        $(function () {
            var options = '';
            for (var i = 0; i < tripura.length; i++) {
                options += '<option value="' + tripura[i] + '">' + tripura[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Uttar Pradesh') {
        var up = ["Select", "Agra", "Allahabad", "Auraiya", "Banbasa", "Bareilly", "Berhni", "Bhadohi", "Dadri", "Dharchula", "Gandhar", "Gauriphanta", "Ghaziabad", "Gorakhpur", "Gunji",
            "Jarwa", "Jhulaghat (Pithoragarh)", "Kanpur", "Katarniyaghat", "Khunwa", "Loni", "Lucknow", "Meerut", "Moradabad", "Muzaffarnagar", "Nepalgunj Road", "Pakwara (Moradabad)",
            "Pantnagar", "Saharanpur", "Sonauli", "Surajpur", "Tikonia", "Varanasi"];
        $(function () {
            var options = '';
            for (var i = 0; i < up.length; i++) {
                options += '<option value="' + up[i] + '">' + up[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Uttarakhand') {
        var uttarakhand = ["Select", "Almora", "Badrinath", "Bangla", "Barkot", "Bazpur", "Chamoli", "Chopra", "Dehra Dun", "Dwarahat", "Garhwal", "Haldwani", "Hardwar", "Haridwar", "Jamal", "Jwalapur", "Kalsi", "Kashipur", "Mall",
            "Mussoorie", "Nahar", "Naini", "Pantnagar", "Pauri", "Pithoragarh", "Rameshwar", "Rishikesh", "Rohni", "Roorkee", "Sama", "Saur"];
        $(function () {
            var options = '';
            for (var i = 0; i < uttarakhand.length; i++) {
                options += '<option value="' + uttarakhand[i] + '">' + uttarakhand[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'West Bengal') {
        var wb = ["Select", "Alipurduar", "Bankura", "Bardhaman", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly", "Howrah",
            "Jalpaiguri", "Kolkata", "Maldah", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Medinipur", "Purba Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"];
        $(function () {
            var options = '';
            for (var i = 0; i < wb.length; i++) {
                options += '<option value="' + wb[i] + '">' + wb[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }
    /*Cities form India End*/

    /*================== District Form Bangladesh Start======================*/

    if ($val == 'Mymensingh') {
        var mymensingh = ["Select", "Mymensingh", "Netrokona", "Jamalpur", "Sherpur"];
        $(function () {
            var options = '';
            for (var i = 0; i < mymensingh.length; i++) {
                options += '<option value="' + mymensingh[i] + '">' + mymensingh[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Rajshahi') {
        var rajshahi = ["Select", "Nawbganj", "Naogaon", "Jaipurhat", "Bogra", "Rajshahi", "Nator", "sairajganj", "Pabna"];
        $(function () {
            var options = '';
            for (var i = 0; i < rajshahi.length; i++) {
                options += '<option value="' + rajshahi[i] + '">' + rajshahi[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Dhaka') {
        var dhaka = ["Select", "Sherpur", "Netrokona", "Jamalpur", "Mymen-singh", "Tangail", "Kishore-ganj", "Manikgonj", "Gazipur", "Narayanganj", "Rajbari", "Faridpur", "Munshiganj", "Shariatpur", "Gopalganj", "Madaripur"];
        $(function () {
            var options = '';
            for (var i = 0; i < dhaka.length; i++) {
                options += '<option value="' + dhaka[i] + '">' + dhaka[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Chittagong') {
        var chittagong = ["Select", "Anawara", "Boalkhali", "Chittagong Sadar", "East Joara", "Jaldi", "Lohagara", "Mirsharai", "Rangunia", "Sandwip", "Satkania", "Fatikchhari"];
        $(function () {
            var options = '';
            for (var i = 0; i < chittagong.length; i++) {
                options += '<option value="' + chittagong[i] + '">' + chittagong[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Khulna') {
        var khulna = ["Select", "Khulna", "Satkhira", "Jessore", "Chuadanga", "Narail", "Bagerhat", "Magura", "Jhenaidah", "Kushtia", "Meherpur"];
        $(function () {
            var options = '';
            for (var i = 0; i < khulna.length; i++) {
                options += '<option value="' + khulna[i] + '">' + khulna[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Barisal') {
        var barisal = ["Select", "Barisal", "Barguna", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"];
        $(function () {
            var options = '';
            for (var i = 0; i < barisal.length; i++) {
                options += '<option value="' + barisal[i] + '">' + barisal[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Sylhet') {
        var sylhet = ["Select", "Habiganj", "Moulvibazar", "Sunamganj", "Sylhet"];
        $(function () {
            var options = '';
            for (var i = 0; i < sylhet.length; i++) {
                options += '<option value="' + sylhet[i] + '">' + sylhet[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Rangpur') {
        var rangpur = ["Select", "Rangpur", "Badarganj"];
        $(function () {
            var options = '';
            for (var i = 0; i < rangpur.length; i++) {
                options += '<option value="' + rangpur[i] + '">' + rangpur[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }
    /*================== District Form Bangladesh End======================*/

    /*================== District Form America End======================*/

    if ($val == 'Alabama') {
        var alabama = ["Select", "Alabaster", "Ashland", "Birmingham", "Cleveland",
            "Cuba", "Hamilton", "Midway", "New Brockton", "Oxford", "Parrish",
            "Pine Hill", "Rainbow City", "Roanoke", "Saraland", "Uniontown", "Woodville"];
        $(function () {
            var options = '';
            for (var i = 0; i < alabama.length; i++) {
                options += '<option value="' + alabama[i] + '">' + alabama[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Alaska') {
        var alaska = ["Select", "Alpine", "Arctic Village", "Big Lake", "Cantwell", "Central", "Delta Junction",
            "Dry Creek", "Ester", "Gulkana", "Happy Valley", "Holy Cross", "Klukwan", "Lazy Mountain", "McCarthy", "Newtok"];
        $(function () {
            var options = '';
            for (var i = 0; i < alaska.length; i++) {
                options += '<option value="' + alaska[i] + '">' + alaska[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Arizona') {
        var arizona = ["Select", "Arizona City", "Blackwater", "Central Heights-Midland City", "Colorado City", "Cottonwood", "Desert Hills", "Duncan",
            "Ganado", "Gilbert", "Holbrook", "Kingman", "Miami", "Naco", "Phoenix", "Sun Lakes", "Yuma"];
        $(function () {
            var options = '';
            for (var i = 0; i < arizona.length; i++) {
                options += '<option value="' + arizona[i] + '">' + arizona[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'California') {
        var california = ["Select", "Alpine", "Apple Valley", "Arnold", "Bakersfield", "Benicia", "California City", "Chester", "Columbia", "Cottonwood",
            "Delhi", "Georgetown", "Hamilton City", "Hawaiian Gardens", "La Mirada"];
        $(function () {
            var options = '';
            for (var i = 0; i < california.length; i++) {
                options += '<option value="' + california[i] + '">' + california[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Colorado') {
        var colorado = ["Select", "Allenspark", "Aurora", "Bayfield", "Cortez", "Edwards", "Elizabeth", "Georgetown", "Hillrose", "Johnstown", "Lake City",
            "Las Animas", "Monte Vista", "Ordway", "Rico", "Sanford"];
        $(function () {
            var options = '';
            for (var i = 0; i < colorado.length; i++) {
                options += '<option value="' + colorado[i] + '">' + colorado[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Florida') {
        var florida = ["Select", "Alford", "Anna Maria", "Apollo Beach", "Gibsonton", "Havana", "Hollywood", "Leesburg", "Malabar", "Marianna", "Melbourne",
            "Miami Beach", "Midway"];
        $(function () {
            var options = '';
            for (var i = 0; i < florida.length; i++) {
                options += '<option value="' + florida[i] + '">' + florida[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Hawaii') {
        var hawaii = ["Select", "Haleiwa", "Hawi", "Lahaina", "Naalehu", "Pearl City", "Pukalani", "Volcano", "Wailuku", "Waipahu"];
        $(function () {
            var options = '';
            for (var i = 0; i < hawaii.length; i++) {
                options += '<option value="' + hawaii[i] + '">' + hawaii[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Louisiana') {
        var louisiana = ["Select", "Alexandria", "Arabi", "Athens", "Barataria", "Columbia", "Cotton Valley", "Crowley", "Delta", "Elizabeth", "Empire", "Glenmora"];
        $(function () {
            var options = '';
            for (var i = 0; i < louisiana.length; i++) {
                options += '<option value="' + louisiana[i] + '">' + louisiana[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Nevada') {
        var nevada = ["Select", "Battle Mountain", "Carlin", "Fallon", "Paradise Valley", "Reno", "Smith", "Sparks", "Stateline", "Sun Valley", "Wadsworth", "Winnemucca",
            "Yerington", "Zephyr Cove"];
        $(function () {
            var options = '';
            for (var i = 0; i < nevada.length; i++) {
                options += '<option value="' + nevada[i] + '">' + nevada[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'New Jersey') {
        var new_jersey = ["Select", "Allendale", "Allentown", "Alloway", "Atlantic Highlands", "Beachwood", "Belford", "Belmar", "Berlin", "Burlington", "Califon", "Chester",
            "Clinton", "Colonia", "Edison", "Fairton"];
        $(function () {
            var options = '';
            for (var i = 0; i < new_jersey.length; i++) {
                options += '<option value="' + new_jersey[i] + '">' + new_jersey[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'New Mexico') {
        var new_mexico = ["Select", "Alamogordo", "Anthony", "Bayard", "Bernalillo", "Brimhall", "Dexter", "Flora Vista", "Hobbs", "Holloman Air Force Base", "Kirtland", "Las Vega",
            "Maxwell", "Radium Springs", "Rincon", "Santa Cruz", "Santo Domingo Pueblo,", "Tatum", "Williamsburg"];
        $(function () {
            var options = '';
            for (var i = 0; i < new_mexico.length; i++) {
                options += '<option value="' + new_mexico[i] + '">' + new_mexico[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'New York') {
        var new_york = ["Select", "Addison", "Albertson", "Athens", "Atlantic Beach", "Berlin", "Binghamton", "Brewster", "Bridgewater", "Cambridge", "Central Square", "Central Valley",
            "Cleveland", "Clifton Park", "Collins", "Colton", "Cuba"];
        $(function () {
            var options = '';
            for (var i = 0; i < new_york.length; i++) {
                options += '<option value="' + new_york[i] + '">' + new_york[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Washington') {
        var washintong = ["Select", "Select", "Aberdeen", "Battle Ground", "Bellingham", "Bingen", "Brewster", "Clinton", "Custer", "East Wenatchee", "Ellensburg", "Fox Island", "George", "Graham",
            "Granite Falls", "Hamilton", "Kingston"];
        $(function () {
            var options = '';
            for (var i = 0; i < washintong.length; i++) {
                options += '<option value="' + washintong[i] + '">' + washintong[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    /*================== District Form America End======================*/

    /*================== District Form Japan End======================*/

    if ($val == 'Akita') {
        var akita = ["Select", "Akita", "Daisen", "Katagami", "Kazuno",
            "Nikaho", "Noshiro", "Oga", "Ōdate", "Semboku", "Yokote",
            "Yurihonjō", "Yuzawa"];
        $(function () {
            var options = '';
            for (var i = 0; i < akita.length; i++) {
                options += '<option value="' + akita[i] + '">' + akita[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Aomori') {
        var aomori = ["Select", "Noheji", "Oirase", "Rokunohe", "Shichinohe", "Tōhoku", "Yokohama",
            "Rokkasho"];
        $(function () {
            var options = '';
            for (var i = 0; i < aomori.length; i++) {
                options += '<option value="' + aomori[i] + '">' + aomori[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Chiba') {
        var chiba = ["Select", "Chiba", "Abiko", "Asahi", "Chōshi",
            "Funabashi", "Futtsu", "Ichihara", "Ichikawa", "Inzai", "Isumi",
            "Kamagaya", "Kashiwa", "Katori", "Katsuura", "Kimitsu", "Minamibōsō", "Narashino",
            "Narashino", "Narita", "Mobara", "Sakura", "Sodegaura", "Sanmu", "Matsudo"];
        $(function () {
            var options = '';
            for (var i = 0; i < chiba.length; i++) {
                options += '<option value="' + chiba[i] + '">' + chiba[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Fukushima') {
        var fukushima = ["Select", "fukushima", "Koori", "Kawamata", "Takahata",
            "Yonezawa", "Shiroishi", "Shichikashuku"];
        $(function () {
            var options = '';
            for (var i = 0; i < fukushima.length; i++) {
                options += '<option value="' + fukushima[i] + '">' + fukushima[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Ibaragi') {
        var ibaragi = ["Select", "Mito ", "Bandō", "Chikusei", "Hitachi",
            "Hitachinaka", "Hitachiōmiya", "Hitachiōta", "Inashiki", "Ishioka", "Itako", "Jōsō", "Kamisu", "Kasama", "Kashima", "Kasumigaura", "Kitaibaraki",
            "Toride", "Takahagi", "Shimotsuma", "Sakuragawa", "Ryūgasaki", "Moriya", "Koga"];
        $(function () {
            var options = '';
            for (var i = 0; i < ibaragi.length; i++) {
                options += '<option value="' + ibaragi[i] + '">' + ibaragi[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Kochi') {
        var kochi = ["Select", "Aki", "Kami", "Kōchi", "Kōnan",
            "Muroto", "Nankoku", "Shimanto", "Sukumo", "Susaki", "Tosa", "Tosashimizu"];
        $(function () {
            var options = '';
            for (var i = 0; i < kochi.length; i++) {
                options += '<option value="' + kochi[i] + '">' + kochi[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Kyoto') {
        var kyoto = ["Select", "Ayabe", "Fukuchiyama", "Kōchi", "Jōyō",
            "Kameoka", "Kizugawa", "Kyōtanabe", "Kyōtango", "Kyoto", "Maizuru", "Miyazu"];
        $(function () {
            var options = '';
            for (var i = 0; i < kyoto.length; i++) {
                options += '<option value="' + kyoto[i] + '">' + kyoto[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Miyagi') {
        var miyagi = ["Select", "Sendai", "Higashimatsushima", "Ishinomaki", "Iwanuma",
            "Kakuda", "Kesennuma", "Kurihara", "Natori", "Ōsaki", "Shiogama", "Shiroishi"];
        $(function () {
            var options = '';
            for (var i = 0; i < miyagi.length; i++) {
                options += '<option value="' + miyagi[i] + '">' + miyagi[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Nagasaki') {
        var nagasaki = ["Select", "Gotō", " Hirado", " Iki", " Isahaya",
            "Matsuura", "Ōmura", "Saikai", "Sasebo", "Shimabara", "Tsushima", " Unzen"];
        $(function () {
            var options = '';
            for (var i = 0; i < nagasaki.length; i++) {
                options += '<option value="' + nagasaki[i] + '">' + nagasaki[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Saga') {
        var saga = ["Select", " Imari", " Kanzaki", " Karatsu", " Kashima",
            "Ogi", " Takeo", "Taku", " Tosu", "Ureshino"];
        $(function () {
            var options = '';
            for (var i = 0; i < saga.length; i++) {
                options += '<option value="' + saga[i] + '">' + saga[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Tokushima') {
        var tokushima = ["Select", " Anan", " Awa", " Miyoshi", " Naruto",
            "Komatsushima", " Tokushima", "Mima", " Yoshinogawa"];
        $(function () {
            var options = '';
            for (var i = 0; i < tokushima.length; i++) {
                options += '<option value="' + tokushima[i] + '">' + tokushima[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }
    /*================== District Form Japan End======================*/
    /*================== District Form Italy Start======================*/

    if ($val == 'Abruzzo') {
        var abruzzo = ["Select", "Acciano", "Ancarano", "Arsita", "Basciano", "Bolognano", "Bucchianico", "Canistro", "Capistrello", "Carsoli", "Cerchio", "Corfinio",
            "Dogliola", "Elice", "Fallo", "Fontecchio", "Garrano Basso", "Lettopalena", "Paglieta"];
        $(function () {
            var options = '';
            for (var i = 0; i < abruzzo.length; i++) {
                options += '<option value="' + abruzzo[i] + '">' + abruzzo[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }

    if ($val == 'Apulia') {
        var apulia = ["Select", "Altamura‎", "Andria‎", "Bari‎", "Barletta", "Bitonto‎", "Cerignola‎", "Fasano‎", "Foggia‎", "Frazioni of Apulia", "Gallipoli, Apulia‎", "Hilltowns in Apulia‎", "Manfredonia‎",
            "Molfetta‎", "Monopoli‎", "Nardò‎", "Ruvo di Puglia", "San Severo‎ ", "Trani‎"];
        $(function () {
            var options = '';
            for (var i = 0; i < apulia.length; i++) {
                options += '<option value="' + apulia[i] + '">' + apulia[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }



    if ($val == 'Basilicata') {
        var basilicata = ["Select", "Frazioni of Basilicata‎", "Hilltowns in Basilicata", "Lagonegro‎", "Matera‎", "Melfi‎", "Municipalities of the Province of Matera‎", "Municipalities of the Province of Potenza‎",
            "Potenza‎", "Basilicata geography stubs‎"];
        $(function () {
            var options = '';
            for (var i = 0; i < basilicata.length; i++) {
                options += '<option value="' + basilicata[i] + '">' + basilicata[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Calabria') {
        var calabria = ["Select", "Acquaformosa", "Acquaro", "Africo", "Ardore", "Bagaladi", "Belsito", "Belvedere Marittimo", "Briatico", "Canna", "Dipignano", "Falconara Albanese", "Fiumara",
            "Gagliato", "Gerocarne", "Grotteria", "Laino Borgo", "Longobucco", "Melissa"];
        $(function () {
            var options = '';
            for (var i = 0; i < calabria.length; i++) {
                options += '<option value="' + calabria[i] + '">' + calabria[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Campania') {
        var campania = ["Select", "Afragola", "Airola", "Alfano", "Altavilla Silentina", "Atena Lucana", "Baiano", "Bellona", "Buccino", "Camerota", "Campora", "Caposele", "Carinaro",
            "Dragoni", "Durazzano", "Fontegreca", "Fontegreca", "Gragnano", "Maiori"];
        $(function () {
            var options = '';
            for (var i = 0; i < campania.length; i++) {
                options += '<option value="' + campania[i] + '">' + campania[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }




    if ($val == 'Piemonte') {
        var piemonte = ["Select", "Abano Terme", "Abbadia San Salvatore", "Abriola", "Aci Bonaccorsi", "Acquanegra Cremonese", "Baceno", "Bagaladi", "Bagnaria Arsa", "Caronno Pertusella",
            "Carpi", "Carpineti", "Carpineto Sinello"];
        $(function () {
            var options = '';
            for (var i = 0; i < piemonte.length; i++) {
                options += '<option value="' + piemonte[i] + '">' + piemonte[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }


    if ($val == 'Sardegna') {
        var sardegna = ["Select", "Arzachena", "Bitti", "Bosa", "Castelsardo", "Guspini", "La Maddalena", "Macomer", "Orune", "Perfugas", "Pozzomaggiore", "San Teodoro", "anta Teresa Gallur"];
        $(function () {
            var options = '';
            for (var i = 0; i < sardegna.length; i++) {
                options += '<option value="' + sardegna[i] + '">' + sardegna[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }



    if ($val == 'Sicily') {
        var sicily = ["Select", "Acate", "Aci Castello", "Agira", "Alessandria della Rocca", "Altavilla Milicia", "Barcellona Pozzo di Gotto", "Belmonte Mezzagno", "Buseto Palizzolo", "Calatafimi-Segesta",
            "Falcone", "Ficarazzi", "Fiumefreddo di Sicilia", "Fondachelli-Fantina"];
        $(function () {
            var options = '';
            for (var i = 0; i < sicily.length; i++) {
                options += '<option value="' + sicily[i] + '">' + sicily[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }




    if ($val == 'Umbria') {
        var umbria = ["Select", "Allerona", "Avigliano Umbro", "Campello sul Clitunno", "Castiglione del Lago", "Fossato di Vico", "Monte Santa Maria Tiberina", "Monteleone di Spoleto",

            "Passignano sul Trasimeno", "Scheggia e Pascelupo"];
        $(function () {
            var options = '';
            for (var i = 0; i < umbria.length; i++) {
                options += '<option value="' + umbria[i] + '">' + umbria[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }



    if ($val == 'Veneto') {
        var veneto = ["Select", "Belluno‎", "Chioggia‎", "Cortina d'Ampezzo", "Frazioni of Veneto", "Hilltowns in Veneto‎", "Padua‎", "Rovigo‎", "Schio‎", "Treviso", "Venice", "Verona‎", "Vicenza‎"];
        $(function () {
            var options = '';
            for (var i = 0; i < veneto.length; i++) {
                options += '<option value="' + veneto[i] + '">' + veneto[i] + '</option>';
            }
            $('#secondlist').html(options);
        });
    }



    /*================== District Form Italy End======================*/

}





