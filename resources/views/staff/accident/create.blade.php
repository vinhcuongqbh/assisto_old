@extends('layouts.master2')

@section('title', 'Accident Create')

@section('heading')
    {{ __('accidentReports') }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('staff.accident.store') }}" method="post" id="accident-create"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div>
                                <label>営業所への報告</label>
                                <p>1. 営業所への一報</p>
                                <p>&ensp; 拠点長もしくは運行管理者に連絡。事故の一報を入れる。</p>
                            </div>
                            <div>
                                <p>2. 相手方の確認</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('name') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="peopleName" name="peopleName"
                                            value="{{ old('peopleName') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('address') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="peopleAddress" name="peopleAddress"
                                            value="{{ old('peopleAddress') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('contact') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="peopleContact" name="peopleContact"
                                            value="{{ old('peopleContact') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('telephone') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="tel" class="form-control" id="peopleTelephone"
                                            name="peopleTelephone" value="{{ old('peopleTelephone') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('company') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="peopleCompany" name="peopleCompany"
                                            value="{{ old('peopleCompany') }}">
                                    </div>
                                </div>

                                <p>※相手が建物、電柱、フェンスなどの器物の場合</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('name') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="otherPeopleName"
                                            name="otherPeopleName" value="{{ old('otherPeopleName') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('contact') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="otherPeopleContact"
                                            name="otherPeopleContact" value="{{ old('otherPeopleContact') }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>

                            <div>
                                <p>3. ①相手方の車の確認</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carNumberPalette') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="carNumberPalette"
                                            name="carNumberPalette" value="{{ old('carNumberPalette') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carType') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="carType" name="carType"
                                            value="{{ old('carType') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carColor') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="carColor" name="carColor"
                                            value="{{ old('carColor') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carImage') }}</label>
                                    <div class="col-12 col-md-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="carImage[]"
                                                    accept="image/*" multiple />
                                                <label class="custom-file-label"
                                                    for="inputFile">{{ __('chooseFile') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carSpeed') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="carSpeed" name="carSpeed"
                                            value="{{ old('carSpeed') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-12 col-md-2 col-form-label">{{ __('carRepairGarageAddress') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="carRepairGarageAddress"
                                            name="carRepairGarageAddress" value="{{ old('carRepairGarageAddress') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carRepairGarageTel') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="tel" class="form-control" id="carRepairGarageTel"
                                            name="carRepairGarageTel" value="{{ old('carRepairGarageTel') }}">
                                    </div>
                                </div>
                                <br>

                                <p>②自車の確認</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carSpeed') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="ourTruckSpeed"
                                            name="ourTruckSpeed" value="{{ old('ourTruckSpeed') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-12 col-md-2 col-form-label">{{ __('carRepairGarageAddress') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="ourTruckRepairGarageAddress"
                                            name="ourTruckRepairGarageAddress"
                                            value="{{ old('ourTruckRepairGarageAddress') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('carRepairGarageTel') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="tel" class="form-control" id="ourTruckRepairGarageTel"
                                            name="ourTruckRepairGarageTel" value="{{ old('ourTruckRepairGarageTel') }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>

                            <div>
                                <p>4. 相手方の保険会社の確認</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('insuranceCompanyName') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="insuranceCompanyName"
                                            name="insuranceCompanyName" value="{{ old('insuranceCompanyName') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('insuranceNumber') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="insuranceNumber"
                                            name="insuranceNumber" value="{{ old('insuranceNumber') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('insuranceImage') }}</label>
                                    <div class="col-12 col-md-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="insuranceImage[]"
                                                accept="image/*" multiple />
                                            <label class="custom-file-label"
                                                for="inputFile">{{ __('chooseFile') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <p>※その場で相手と示談交渉はしない。陳謝は良いが必ず事故係から連絡させる事を相手に伝える。</p>
                            </div>
                            <br>
                            <hr>

                            <div>
                                <p>5. 事故の状況と情報収集を図る</p>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('roadType') }}</label>
                                    <div class="col-12 col-md-10">
                                        @foreach ($roadTypes as $roadType)
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="roadType"
                                                        id="{{ $roadType->road_type_id }}"
                                                        value="{{ $roadType->road_type_id }}"
                                                        @if (old('roadType') == $roadType->road_type_id) checked @endif>
                                                    <label
                                                        class="form-check-label">{{ $roadType->road_type_name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('roadWidth') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="roadWidth" name="roadWidth"
                                            value="{{ old('roadWidth') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('outlook') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="outlook" name="outlook"
                                            value="{{ old('outlook') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('trafficSign') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="trafficSign" name="trafficSign"
                                            value="{{ old('trafficSign') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('date') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="date" class="form-control" id="date" name="date"
                                            value="{{ old('date') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('time') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="time" class="form-control" id="time" name="time"
                                            value="{{ old('time') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('collisionPoint') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="collisionPoint"
                                            name="collisionPoint" value="{{ old('collisionPoint') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('parkPosition') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="parkPosition" name="parkPosition"
                                            value="{{ old('parkPosition') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('victim') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="victim" name="victim"
                                            value="{{ old('victim') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('witness') }}</label>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control" id="witness" name="witness"
                                            value="{{ old('witness') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('content') }}</label>
                                    <div class="col-12 col-md-10">
                                        <textarea class="form-control" id="content" name="content" rows="4" cols="50">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-md-2 col-form-label">{{ __('accidentImage') }}</label>
                                    <div class="col-12 col-md-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="accidentImage[]"
                                                    accept="image/*" multiple />
                                                <label class="custom-file-label"
                                                    for="inputFile">{{ __('chooseFile') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>

                            <div>
                                <p>6. 営業所への再度連絡</p>
                                <p>2～5までの内容が確認出来たら、再度拠点長もしくは運行管理者に連絡</p>
                            </div>
                            <hr>

                            <div>
                                <p>7. 医師の診察を受ける</p>
                                <p>軽いけがだと思ったり、自覚症状がなくても必ず医師の診断を受ける。領収書や診断書は保存しておく。</p>
                            </div>
                        </div><!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" name="action" value="report" class="btn btn-lg bg-olive text-white w-100 text-nowrap m-1" style="max-width: 400px;">{{ __('report') }}</button>
                            <button type="submit" name="action" value="draft" class="btn btn-lg btn-warning text-white w-100 text-nowrap m-1" style="max-width: 400px;">{{ __('draft') }}</button>
                            <a class="btn btn-lg btn-danger text-white w-100 text-nowrap m-1" style="max-width: 400px;" href="{{ route('staff.accident.index') }}">{{ __('cancel') }}</a>
                        </div>
                    </form>
                </div><!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop

@section('js')
    <!-- jquery-validation -->
    <script src="/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/vendor/jquery-validation/additional-methods.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#accident-create').validate({
                rules: {
                    date: {
                        required: true,
                    },
                },
                messages: {
                    date: {
                        required: "{{ __('selectDate') }}",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.col-12').append(error);

                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@stop
