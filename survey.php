<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlye.css">
    <link rel="stylesheet" type="text/css" href="./fonts-6/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.full.min.js"></script>
    <title></title>
    <style>
    .heading {
        background-color: grey;
        width: fit-content;
        text-align: center;
        margin: 0 auto;
        padding: 10px 30px;
        border-radius: 20px;
        margin: 5px auto;
        }
        </style>

</head>

<body>
    <h1 class="heading">شارك برأيك في مبادرة تخفيف الزحام المروري داخل المدينة</h1>
    <form id="form" action="submit.php" method="post">
        <?php include './components/intro.php' ?>
        <?php include './components/phase1.php' ?>
        <?php include './components/phase2.php' ?>
        <?php include './components/phase3.php' ?>


    <!-- 4 -->
<div>
            <h2 class="arrow" style="cursor: pointer;">القسم الرابع: حلول الزحام ودرجة واقعياتها</h2>
            <div class="form-control">
    <label style="font-size: 16px; font-weight: bold;">حلول ثقافية:</label><br>
            <div class="grid-form">
                <div class="checkbox-container">
    <label for="traffic-awareness-in-education-media-worship">
        <input type="checkbox" id="traffic_awareness_in_education_media_worship" name="cultural-solutions[]"
            value="التوعية المرورية في التعليم والاعلام ودور العبادة">
        التوعية المرورية في التعليم والاعلام ودور العبادة
    </label><br>
    <label for="crosswalks-obligation">
        <input type="checkbox" id="crosswalks_obligation" name="cultural-solutions-details[]"
            value="الالتزام بالأماكن المخصصة لعبور المشاة">
        الالتزام بالأماكن المخصصة لعبور المشاة
    </label><br>
    <label for="waiting-in-designated-areas">
        <input type="checkbox" id="waiting_in_designated_areas" name="cultural-solutions-details[]"
            value="الانتظار في الأماكن المخصصة للانتظار فقط">
        الانتظار في الأماكن المخصصة للانتظار فقط
    </label><br>
    <label for="reduce-private-car-usage">
        <input type="checkbox" id="reduce_private_car_usage" name="cultural-solutions-details[]"
            value="التقليل من الخروج بالسيارة الخاصة">
        التقليل من الخروج بالسيارة الخاصة
    </label><br>
    <label for="encourage-walking">
        <input type="checkbox" id="encourage_walking" name="cultural-solutions-details[]" value="التحفيز على المشي">
        التحفيز على المشي
    </label><br>
    <label for="encourage-cycling">
        <input type="checkbox" id="encourage_cycling" name="cultural-solutions-details[]"
            value="التحفيز على استخدام الدراجات الهوائية">
        التحفيز على استخدام الدراجات الهوائية
    </label><br>
    <label for="encourage-carpooling">
        <input type="checkbox" id="encourage_carpooling" name="cultural-solutions-details[]"
            value="التحفيز على النقل التشاركي">
        التحفيز على النقل التشاركي
    </label><br>
    <label for="encourage-public-transportation[]">
        <input type="checkbox" id="encourage_public_transportation" name="cultural-solutions-details[]"
            value="التحفيز على استخدام النقل الجماعي">
        التحفيز على استخدام النقل الجماعي
    </label><br>
</div>
<div class="radio-container">
        <label style="font-size: 16px; font-weight: bold;">ضعيف</label>
        <label style="font-size: 16px; font-weight: bold;">متوسط</label>
        <label style="font-size: 16px; font-weight: bold;">قوي</label>
        <label style="font-size: 16px; font-weight: bold;">قوي جدا</label><br>
    <input type="radio" name="traffic_awareness_in_education_media_worship" value="ضعيف">
    <input type="radio" name="traffic_awareness_in_education_media_worship" value="متوسط">
    <input type="radio" name="traffic_awareness_in_education_media_worship" value="قوي">
    <input type="radio" name="traffic_awareness_in_education_media_worship" value="قوي جدا"><br>
        <input type="radio" name="crosswalks_obligation" value="ضعيف">
        <input type="radio" name="crosswalks_obligation" value="متوسط">
        <input type="radio" name="crosswalks_obligation" value="قوي">
        <input type="radio" name="crosswalks_obligation" value="قوي جدا"><br>
        <input type="radio" name="waiting_in_designated_areas" value="ضعيف">
        <input type="radio" name="waiting_in_designated_areas" value="متوسط">
        <input type="radio" name="waiting_in_designated_areas" value="قوي">
        <input type="radio" name="waiting_in_designated_areas" value="قوي جدا"><br>
        <input type="radio" name="reduce_private_car_usage" value="ضعيف">
        <input type="radio" name="reduce_private_car_usage" value="متوسط">
        <input type="radio" name="reduce_private_car_usage" value="قوي">
        <input type="radio" name="reduce_private_car_usage" value="قوي جدا"><br>
        <input type="radio" name="encourage_walking" value="ضعيف">
        <input type="radio" name="encourage_walking" value="متوسط">
        <input type="radio" name="encourage_walking" value="قوي">
        <input type="radio" name="encourage_walking" value="قوي جدا"><br>
        <input type="radio" name="encourage_cycling" value="ضعيف">
        <input type="radio" name="encourage_cycling" value="متوسط">
        <input type="radio" name="encourage_cycling" value="قوي">
        <input type="radio" name="encourage_cycling" value="قوي جدا"><br>
        <input type="radio" name="encourage_carpooling" value="ضعيف">
        <input type="radio" name="encourage_carpooling" value="متوسط">
        <input type="radio" name="encourage_carpooling" value="قوي">
        <input type="radio" name="encourage_carpooling" value="قوي جدا"><br>
        <input type="radio" name="encourage_public_transportation" value="ضعيف">
        <input type="radio" name="encourage_public_transportation" value="متوسط">
        <input type="radio" name="encourage_public_transportation" value="قوي">
        <input type="radio" name="encourage_public_transportation" value="قوي جدا"><br>

</div></div>


<div class="form-control">
<label style="font-size: 16px; font-weight: bold;">حلول هندسية وتخطيطية:</label><br>
<div class="grid-form">
    <div class="checkbox-container">
    <label for="installation_of_traffic-signals_at_busy_intersections">
        <input type="checkbox" id="installation_of_traffic_signals_at_busy_intersections"
            name="engineering-planning-solutions[]" value="تركيب وتشغيل إشارات ضوئية عند التقاطعات السطحية المزدحمة">
        تركيب وتشغيل إشارات ضوئية عند التقاطعات السطحية المزدحمة
    </label><br>
    <label for="construction-of-tunnels-or-bridges-at-busy-intersections">
        <input type="checkbox" id="construction_of_tunnels_or_bridges_at_busy_intersections"
            name="engineering-planning-solutions[]" value="عمل أنفاق أو كباري عند التقاطعات السطحية المزدحمة">
        عمل أنفاق أو كباري عند التقاطعات السطحية المزدحمة
    </label><br>
    <label for="expansion-of-roundabouts-around-cities">
        <input type="checkbox" id="expansion_of_roundabouts_around_cities" name="engineering-planning-solutions[]"
            value="التوسع في الطرق الدائرية حول المدن">
        التوسع في الطرق الدائرية حول المدن
    </label><br>
    <label for="expansion-or-creation-of-alternative-roads">
        <input type="checkbox" id="expansion_or_creation_of_alternative_roads" name="engineering-planning-solutions[]"
            value="توسعة الطرق المزدحمة أو انشاء محاور بديله">
        توسعة الطرق المزدحمة أو انشاء محاور بديله
    </label><br>
    <label for="opening-reverse-turns-beneath-bridges-with-traffic-signals">
        <input type="checkbox" id="opening_reverse_turns_beneath_bridges_with_traffic_signals"
            name="engineering-planning-solutions[]" value="فتح الدورانات للخلف أسفل الكباري مع تركيب وتشغيل إشارة ضوئية">
        فتح الدورانات للخلف أسفل الكباري مع تركيب وتشغيل إشارة ضوئية
    </label><br>
    <label for="dedicating-places-for-bus-microbus-and-taxi-stations-off-the-road">
        <input type="checkbox" id="dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road"
            name="engineering-planning-solutions[]"
            value="تخصيص أماكن لمحطات الأتوبيس والميكروباص والتاكسي خارج نهر الطريق">
        تخصيص أماكن لمحطات الأتوبيس والميكروباص والتاكسي خارج نهر الطريق
    </label><br>
    <label for="providing_ample_parking_spaces_especially_around_commercial_and_service_areas">
        <input type="checkbox" id="providing-ample-parking-spaces-especially-around-commercial-and-service-areas"
            name="engineering-planning-solutions[]"
            value="توفير أماكن كافية للانتظار خصوصا حول الأنشطة التجارية والخدمية">
        توفير أماكن كافية للانتظار خصوصا حول الأنشطة التجارية والخدمية
    </label><br>
    <label for="expanding-the-provision-of-safe-pedestrian-crossings-from-road-users">
        <input type="checkbox" id="expanding_the_provision_of_safe_pedestrian_crossings_from_road_users"
            name="engineering-planning-solutions[]"
            value="التوسع فى مجال توفير معابر آمنه للمشاة من مستخدمى الطرق بما يحقق الأمان الكافى للسير الطوالي أو العبور">
        التوسع فى مجال توفير معابر آمنه للمشاة من مستخدمى الطرق بما يحقق الأمان الكافى للسير الطوالي أو العبور
    </label><br>
    <label for="prohibiting-private-car-traffic-in-some-areas">
        <input type="checkbox" id="prohibiting_private_car_traffic_in_some_areas" name="engineering-planning-solutions[]"
            value="حظر سير السيارات الخاصة في بعض المناطق">
        حظر سير السيارات الخاصة في بعض المناطق
    </label><br>

    <label for="establishing-paths-for-walking-and-cycling">
        <input type="checkbox" id="establishing_paths_for_walking_and_cycling" name="engineering-planning-solutions[]"
            value="إنشاء مسارات للمشي والدراجات الهوائية">
        إنشاء مسارات للمشي والدراجات الهوائية
    </label><br>
    <label for="dismantling-peak-hours-inside-the-city-by">
        <input type="checkbox" id="dismantling_peak_hours_inside_the_city_by" name="engineering-planning-solutions[]"
            value="تفكيك ساعات الذروة داخل المدينة من خلال">
        تفكيك ساعات الذروة داخل المدينة من خلال :-
    </label><br>
    <label for="expand-digital-services">
        <input type="checkbox" id="expand_digital_services" name="engineering-planning-solutions[]"
            value="التوسع في انهاء الخدمات باستخدام الوسائل الرقمية (on line )">
        التوسع في انهاء الخدمات باستخدام الوسائل الرقمية (on line )
    </label><br>    
    <label for="flexible-working-hours">
        <input type="checkbox" id="flexible_working_hours" name="engineering-planning-solutions[]"
            value="المرونة في ساعات العمل ( بدء وانتهاء)">
        المرونة في ساعات العمل ( بدء وانتهاء)
    </label><br>
</div>
<div class="radio-container">
        <label style="font-size: 16px; font-weight: bold;">ضعيف</label>
        <label style="font-size: 16px; font-weight: bold;">متوسط</label>
        <label style="font-size: 16px; font-weight: bold;">قوي</label>
        <label style="font-size: 16px; font-weight: bold;">قوي جدا</label><br>
    <input type="radio" name="installation_of_traffic_signals_at_busy_intersections" value="ضعيف">
    <input type="radio" name="installation_of_traffic_signals_at_busy_intersections" value="متوسط">
    <input type="radio" name="installation_of_traffic_signals_at_busy_intersections" value="قوي">
    <input type="radio" name="installation_of_traffic_signals_at_busy_intersections" value="قوي جدا"><br>
        <input type="radio" name="construction_of_tunnels_or_bridges_at_busy_intersections" value="ضعيف">
        <input type="radio" name="construction_of_tunnels_or_bridges_at_busy_intersections" value="متوسط">
        <input type="radio" name="construction_of_tunnels_or_bridges_at_busy_intersections" value="قوي">
        <input type="radio" name="construction_of_tunnels_or_bridges_at_busy_intersections" value="قوي جدا"><br>
        <input type="radio" name="expansion_of_roundabouts_around_cities" value="ضعيف">
        <input type="radio" name="expansion_of_roundabouts_around_cities" value="متوسط">
        <input type="radio" name="expansion_of_roundabouts_around_cities" value="قوي">
        <input type="radio" name="expansion_of_roundabouts_around_cities" value="قوي جدا"><br>
        <input type="radio" name="expansion_or_creation_of_alternative_roads" value="ضعيف">
        <input type="radio" name="expansion_or_creation_of_alternative_roads" value="متوسط">
        <input type="radio" name="expansion_or_creation_of_alternative_roads" value="قوي">
        <input type="radio" name="expansion_or_creation_of_alternative_roads" value="قوي جدا"><br>
        <input type="radio" name="opening_reverse_turns_beneath_bridges_with_traffic_signals" value="ضعيف">
        <input type="radio" name="opening_reverse_turns_beneath_bridges_with_traffic_signals" value="متوسط">
        <input type="radio" name="opening_reverse_turns_beneath_bridges_with_traffic_signals" value="قوي">
        <input type="radio" name="opening_reverse_turns_beneath_bridges_with_traffic_signals" value="قوي جدا"><br>
        <input type="radio" name="dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road" value="ضعيف">
        <input type="radio" name="dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road" value="متوسط">
        <input type="radio" name="dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road" value="قوي">
        <input type="radio" name="dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road" value="قوي جدا"><br>
        <input type="radio" name="providing_ample_parking_spaces_especially_around_commercial_and_service_areas" value="ضعيف">
        <input type="radio" name="providing_ample_parking_spaces_especially_around_commercial_and_service_areas" value="متوسط">
        <input type="radio" name="providing_ample_parking_spaces_especially_around_commercial_and_service_areas" value="قوي">
        <input type="radio" name="providing_ample_parking_spaces_especially_around_commercial_and_service_areas"
            value="قوي جدا"><br>
        <input type="radio" name="expanding_the_provision_of_safe_pedestrian_crossings_from_road_users" value="ضعيف">
        <input type="radio" name="expanding_the_provision_of_safe_pedestrian_crossings_from_road_users" value="متوسط">
        <input type="radio" name="expanding_the_provision_of_safe_pedestrian_crossings_from_road_users" value="قوي">
        <input type="radio" name="expanding_the_provision_of_safe_pedestrian_crossings_from_road_users" value="قوي جدا"><br>
        <input type="radio" name="prohibiting_private_car_traffic_in_some_areas" value="ضعيف">
        <input type="radio" name="prohibiting_private_car_traffic_in_some_areas" value="متوسط">
        <input type="radio" name="prohibiting_private_car_traffic_in_some_areas" value="قوي">
        <input type="radio" name="prohibiting_private_car_traffic_in_some_areas" value="قوي جدا"><br>
        <input type="radio" name="establishing_paths_for_walking_and_cycling" value="ضعيف">
        <input type="radio" name="establishing_paths_for_walking_and_cycling" value="متوسط">
        <input type="radio" name="establishing_paths_for_walking_and_cycling" value="قوي">
        <input type="radio" name="establishing_paths_for_walking_and_cycling" value="قوي جدا"><br>
        <input type="radio" name="dismantling_peak_hours_inside_the_city_by" value="ضعيف">
        <input type="radio" name="dismantling_peak_hours_inside_the_city_by" value="متوسط">
        <input type="radio" name="dismantling_peak_hours_inside_the_city_by" value="قوي">
        <input type="radio" name="dismantling_peak_hours_inside_the_city_by" value="قوي جدا"><br>
        <input type="radio" name="expand_digital_services" value="ضعيف">
        <input type="radio" name="expand_digital_services" value="متوسط">
        <input type="radio" name="expand_digital_services" value="قوي">
        <input type="radio" name="expand_digital_services" value="قوي جدا"><br>
        <input type="radio" name="flexible_working_hours" value="ضعيف">
        <input type="radio" name="flexible_working_hours" value="متوسط">
        <input type="radio" name="flexible_working_hours" value="قوي">
        <input type="radio" name="flexible_working_hours" value="قوي جدا"><br>
</div></div>



<div class="form-control">
    <label style="font-size: 16px; font-weight: bold;">حلول تشريعية وتنفيذية:</label><br>
<div class="grid-form">
    <div class="checkbox-container">
    <label for="establishment-of-a-unified-official-entity-responsible-for-traffic-management">
        <input type="checkbox" id="establishment_of_a_unified_official_entity_responsible_for_traffic_management"
            name="legislative-executive-solutions[]"
            value="الاسراع في تأسيس كيان رسمي موحد مسؤول عن متابعة وحل الزحام يضم الجهات الرسمية ذات الصلة وأساتذة الجامعات ونقابة المهندسين">
        الاسراع في تأسيس كيان رسمي موحد مسؤول عن متابعة وحل الزحام يضم الجهات الرسمية ذات الصلة وأساتذة الجامعات ونقابة
        المهندسين
    </label><br>
    <label for="review-of-laws-and-regulations-pertaining-to-improper-parking-violations">
        <input type="checkbox" id="review_of_laws_and_regulations_pertaining_to_improper_parking_violations"
            name="legislative-executive-solutions[]"
            value="مراجعة التشريعات والقوانين الخاصة بعقوبات الانتظار الخاطيء ودراسة مدى مناسبتها واحتياجها للتغليظ من عدمه">
        مراجعة التشريعات والقوانين الخاصة بعقوبات الانتظار الخاطيء ودراسة مدى مناسبتها واحتياجها للتغليظ من عدمه
    </label><br>
    <label for="review-of-laws-and-regulations-pertaining-to-pedestrian-crossing-violations">
        <input type="checkbox" id="review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations"
            name="legislative-executive-solutions[]"
            value="مراجعة التشريعات والقوانين الخاصة بعقوبات عدم التزام المشاة بمناطق العبور المحددة">
        مراجعة التشريعات والقوانين الخاصة بعقوبات عدم التزام المشاة بمناطق العبور المحددة
    </label><br>
    <label for="increasing-the-penalty-for-parking-violations">
        <input type="checkbox" id="increasing_the_penalty_for_parking_violations" name="legislative-executive-solutions[]"
            value="تغليظ عقوبة الانتظار">
        تغليظ عقوبة الانتظار
    </label><br>
    <label for="mandatory-traffic-impact-studies-for-facilities-attracting-high-volumes-of-traffic">
        <input type="checkbox" id="mandatory_traffic_impact_studies_for_facilities_attracting-high_volumes_of_traffic"
            name="legislative-executive-solutions[]"
            value="الالزام بتقديم دراسات الأثر المروري للمنشآت التي قد تكون جاذبة لأحجام تردد عالية  للتأكد من تحقق أماكن الجراجات وكذا تأثير التردد على الشبكة">
        الالزام بتقديم دراسات الأثر المروري للمنشآت التي قد تكون جاذبة لأحجام تردد عالية للتأكد من تحقق أماكن الجراجات
        وكذا تأثير التردد على الشبكة
    </label><br>

    <label for="expanding-electronic-surveillance-systems-especially-at-attraction-points-bridges-and-tunnels">
        <input type="checkbox"
            id="expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels"
            name="legislative-executive-solutions[]"
            value="التوسع في انظمة الرقابة الاليكترونية خصوصا في الاماكن الجاذبة للتردد والكباري والانفاق">
        التوسع في انظمة الرقابة الاليكترونية خصوصا في الاماكن الجاذبة للتردد والكباري والانفاق
    </label><br>

    <label for="mandatory-traffic-awareness-curriculum-in-schools">
        <input type="checkbox" id="mandatory_traffic_awareness_curriculum_in_schools"
            name="legislative-executive-solutions[]" value="الالزام بتدريس مواد  توعية مرورية على طلبة المدارس">
        الالزام بتدريس مواد توعية مرورية على طلبة المدارس
    </label><br>

    
    <label for="review-of-licensing-laws-for-land-transport-companies-to-support-the-establishment-of-private-entities">
        <input type="checkbox"
            id="review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities"
            name="legislative-executive-solutions[]"
            value="مراجعة قوانين وقواعد الترخيص لشركات النقل البري للركاب لتدعيم إقامة كيانات خاصة">
        مراجعة قوانين وقواعد الترخيص لشركات النقل البري للركاب لتدعيم إقامة كيانات خاصة
    </label><br>
    <label for="mandatory-broadcast-of-traffic-awareness-segments-on-various-media">
        <input type="checkbox" id="mandatory_broadcast_of_traffic_awareness_segments_on_various_media"
            name="legislative-executive-solutions[]" value="الالزام ببث فقرات توعوية مرورية على وسائل الاعلام المختلفه">
        الالزام ببث فقرات توعوية مرورية على وسائل الاعلام المختلفه
    </label><br>
    </div>
    <div class="radio-container">
        <label style="font-size: 16px; font-weight: bold;">ضعيف</label>
        <label style="font-size: 16px; font-weight: bold;">متوسط</label>
        <label style="font-size: 16px; font-weight: bold;">قوي</label>
        <label style="font-size: 16px; font-weight: bold;">قوي جدا</label><br>
                <input type="radio" name="establishment_of_a_unified_official_entity_responsible_for_traffic_management" value="ضعيف">
                <input type="radio" name="establishment_of_a_unified_official_entity_responsible_for_traffic_management" value="متوسط">
                <input type="radio" name="establishment_of_a_unified_official_entity_responsible_for_traffic_management" value="قوي">
                <input type="radio" name="establishment_of_a_unified_official_entity_responsible_for_traffic_management"
                    value="قوي جدا"><br>
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_improper_parking_violations" value="ضعيف">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_improper_parking_violations" value="متوسط">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_improper_parking_violations" value="قوي">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_improper_parking_violations" value="قوي جدا"><br>
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations" value="ضعيف">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations" value="متوسط">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations" value="قوي">
        <input type="radio" name="review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations"
            value="قوي جدا"><br>
        <input type="radio" name="increasing_the_penalty_for_parking_violations" value="ضعيف">
        <input type="radio" name="increasing_the_penalty_for_parking_violations" value="متوسط">
        <input type="radio" name="increasing_the_penalty_for_parking_violations" value="قوي">
        <input type="radio" name="increasing_the_penalty_for_parking_violations" value="قوي جدا"><br>
    <input type="radio" name="mandatory_traffic_impact_studies_for_facilities_attracting" value="ضعيف">
    <input type="radio" name="mandatory_traffic_impact_studies_for_facilities_attracting" value="متوسط">
    <input type="radio" name="mandatory_traffic_impact_studies_for_facilities_attracting" value="قوي">
    <input type="radio" name="mandatory_traffic_impact_studies_for_facilities_attracting" value="قوي جدا"><br>
        <input type="radio" name="expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels"
            value="ضعيف">
        <input type="radio" name="expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels"
            value="متوسط">
        <input type="radio" name="expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels"
            value="قوي">
        <input type="radio" name="expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels"
            value="قوي جدا"><br>
        <input type="radio" name="mandatory_traffic_awareness_curriculum_in_schools" value="ضعيف">
        <input type="radio" name="mandatory_traffic_awareness_curriculum_in_schools" value="متوسط">
        <input type="radio" name="mandatory_traffic_awareness_curriculum_in_schools" value="قوي">
        <input type="radio" name="mandatory_traffic_awareness_curriculum_in_schools" value="قوي جدا"><br>
        <input type="radio"
            name="review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities"
            value="ضعيف">
        <input type="radio"
            name="review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities"
            value="متوسط">
        <input type="radio"
            name="review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities"
            value="قوي">
        <input type="radio"
            name="review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities"
            value="قوي جدا"><br>
        <input type="radio" name="mandatory_broadcast_of_traffic_awareness_segments_on_various_media" value="ضعيف">
        <input type="radio" name="mandatory_broadcast_of_traffic_awareness_segments_on_various_media" value="متوسط">
        <input type="radio" name="mandatory_broadcast_of_traffic_awareness_segments_on_various_media" value="قوي">
        <input type="radio" name="mandatory_broadcast_of_traffic_awareness_segments_on_various_media" value="قوي جدا"><br>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
            <div>
                <h2 class="arrow" style="cursor: pointer;">القسم الخامس: إضافات لما ورد بالاستبيان</h2>
            <div class="form-control">
                <label for="proposal-1" style=" font-weight: bold;">أماكن آخري للزحام:</label>
                <input type="text" id="proposal-1" name="proposal-1" ><br>
            
                <label for="proposal-2" style=" font-weight: bold;"> أسباب آخري للزحام:</label>
                <input type="text" id="proposal-2" name="proposal-2" ><br>
            
                <label for="proposal-3" style=" font-weight: bold;">حلول آخري للزحام:</label>
                <input type="text" id="proposal-3" name="proposal-3" ><br>
            </div>



            
        <button class="submitBtn" id="submitBtn" type="submitBtn" value="submitBtn">إرسال</button>


   


    </form>
    
        <!-- <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
        <script src="map.js"></script> -->
            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
            <script src="map.js"></script>
            <script src="map2.js"></script>
            
    <script>
        
    document.addEventListener("DOMContentLoaded", function () {
        document.addEventListener("click", function (event) {
            const header = event.target.closest("h2.arrow");
            if (header) {
                header.parentElement.classList.toggle("open");
            }
        });
    });

    </script>

</body>

</html>