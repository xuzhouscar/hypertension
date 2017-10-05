<form id="form-add" action="{{ url("patient/create") }}" class="horizontal-form">
    <!--
    <div class="alert alert-error hide">

        <button class="close" data-dismiss="alert"></button>

        You have some form errors. Please check below.

    </div>

    <div class="alert alert-success hide">

        <button class="close" data-dismiss="alert"></button>

        Your form validation is successful!

    </div>
    -->
    <h3 class="form-section">病人信息</h3>
    {{ csrf_field() }}
    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label" for="name"><span class="required">*</span> 姓名</label>

                <div class="controls">

                    <input type="text" id="name" name="PatientInfo[name]" class="m-wrap span12" placeholder="姓名">

                </div>

            </div>

        </div>

        <!--/span-->

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 性别</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"SEX") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[sex]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <!--/span-->

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label" for="id_card"><span class="required">*</span> 身份证号码</label>

                <div class="controls">

                    <input type="text" id="id_card" name="PatientInfo[id_card]" class="m-wrap span12" placeholder="身份证">

                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label" for="jieru"><span class="required">*</span> 第几次介入</label>

                <div class="controls">

                    <input type="text" id="jieru" name="PatientInfo[intervention_num]" class="m-wrap span12" placeholder="次数">

                </div>

            </div>

        </div>

    </div>

    <!--/row-->

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 入组时间</label>

                <div class="controls">
                    <div class="input-append date date-picker" data-date="" data-date-format="yyyy-mm-dd" data-date-viewmode="years" data-date-minviewmode="months">

                        <input class="m-wrap m-ctrl-medium date-picker" name="PatientInfo[admission_time]" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">手册</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"MANUAL") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[manual]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">射频</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"RADIO_FREQUENCY") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[radio_frequency]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">起搏</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"PACING") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[pacing]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 房颤类型</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"FIBRILLATION") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[fibrillation]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">左心耳封堵</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"LEFT_ATRIAL_APPENDAGE") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[left_atrial_appendage]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">尿毒症</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"UREMIA") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[uremia]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">乙肝</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HEPATITIS_B") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[hepatitis_B]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">脂肪肝</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HEPATIC_ADIPOSE_INFILTRATION") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[hepatic_adipose_infiltration]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">甲亢</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HYPERTHYREOSIS") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[hyperthyreosis]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">甲减</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HYPOTHYROIDISM") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[hypothyroidism]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 住院号</label>

                <div class="controls">
                    <input type="text" id="hospital_number" name="PatientInfo[hospital_number]" class="m-wrap span12" placeholder="住院号">
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 出生日期</label>

                <div class="controls">
                    <div class="input-append date date-picker" data-date="" data-date-format="yyyy-mm-dd" data-date-viewmode="years" data-date-minviewmode="months">

                        <input class="m-wrap m-ctrl-medium date-picker" name="PatientInfo[birth_date]" readonly size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"><span class="required">*</span> 联系方式1</label>

                <div class="controls">
                    <input type="text" id="phone1" name="PatientInfo[phone1]" class="m-wrap span12" placeholder="联系方式1">
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"> 联系方式2</label>

                <div class="controls">
                    <input type="text" id="phone2" name="PatientInfo[phone2]" class="m-wrap span12" placeholder="联系方式2">
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label"> 职业</label>

                <div class="controls">
                    <input type="text" id="career" name="PatientInfo[career]" class="m-wrap span12" placeholder="职业">
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">婚否</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"ISMARRY") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[ismarry]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">孩子数量</label>

                <div class="controls">
                    <input type="text" id="career" name="PatientInfo[child_num]" class="m-wrap span12" placeholder="孩子数量">
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">宗教信仰</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"RELIGIOUS_BELIEF") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[religious_belief]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">文化程度</label>

                <div class="controls">
                    <select class="m-wrap span12" name="PatientInfo[cultural_level]" id="cultural_level">
                        @foreach($patient_info->option(-1,"CULTURAL_LEVEL") as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">籍贯</label>

                <div class="controls">
                    <input type="text" id="native_place" name="PatientInfo[native_place]" class="m-wrap span12" placeholder="籍贯">
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">睡眠呼吸暂停</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"SLEEP_APNEA") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[sleep_apnea]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">纽约心功能</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"NEW_YORK_HEART_FUNCTION") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[new_york_heart_function]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">COPD</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"COPD") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[COPD]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">结缔组织病史</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HISTORY_OF_CONNECTIVE_TISSUE") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[history_of_connective_tissue]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">肿瘤病史</label>

                <div class="controls">
                    @foreach($patient_info->option(-1,"HISTORY_OF_CANCER") as $key => $value)
                        <label class="radio">
                            <input type="radio" name="PatientInfo[history_of_cancer]" value="{{ $key }}" />
                            {{ $value }}
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">其他疾病</label>

                <div class="controls">
                    <input type="text" id="" name="PatientInfo[other_medical_history]" class="m-wrap span12" placeholder="其他疾病">
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">身高</label>

                <div class="controls input-append">
                    <input type="text" id="" name="PatientInfo[height]" class="m-wrap span12" placeholder="身高">
                    <span class="add-on">CM</span>
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">体重</label>

                <div class="controls input-append">
                    <input type="text" id="" name="PatientInfo[body_weight]" class="m-wrap span12" placeholder="体重"><span class="add-on">KG</span>
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">腹围</label>

                <div class="controls">
                    <input type="text" id="" name="PatientInfo[abdominal_circumference]" class="m-wrap span12" placeholder="腹围">
                </div>

            </div>

        </div>

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">BMI</label>

                <div class="controls">
                    <input type="text" id="" name="PatientInfo[BMI]" class="m-wrap span12" placeholder="BMI">
                </div>

            </div>

        </div>

    </div>

    <div class="row-fluid">

        <div class="span6 ">

            <div class="control-group">

                <label class="control-label">MOCA评分</label>

                <div class="controls">
                    <input type="text" id="" name="PatientInfo[MOCA]" class="m-wrap span12" placeholder="腹围">
                </div>

            </div>

        </div>
    </div>

</form>

<script>
    var oForm_add = Hmodal.formAJAX({
        id: "#form-add",
        messages: {
            "PatientInfo[name]": {
                required: '姓名不能为空'
            },
            "PatientInfo[id_card]": {
                required: '身份证号码'
            },
            "PatientInfo[sex]": {
                required: '性别不能为空'
            },
            "PatientInfo[fibrillation]":{
                required: '房颤类型不能为空'
            },
            "PatientInfo[intervention_num]":{
                required: '第几次介入不能为空'
            },
            "PatientInfo[hospital_number]":{
                required: '住院号不能为空'
            },
            "PatientInfo[birth_date]":{
                required: '出生日期不能为空'
            },
            "PatientInfo[phone1]":{
                required: '联系方式1不能为空'
            },
            "PatientInfo[admission_time]":{
                required: '入组时间不能为空'
            }
        },
        rules: {
            "PatientInfo[name]"	  : {
                required: true
            },
            "PatientInfo[id_card]"	  : {
                required: true
            },
            "PatientInfo[sex]"	  : { required: true },

            "PatientInfo[fibrillation]":{required:true},
            "PatientInfo[intervention_num]":{required:true},
            "PatientInfo[hospital_number]":{required:true},
            "PatientInfo[birth_date]":{required:true},
            "PatientInfo[phone1]":{required:true},
            "PatientInfo[admission_time]":{required:true}

        }

    });
</script>