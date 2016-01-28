    {{ Form::hidden('_token', $value=csrf_token()) }}
    <div class="form-group{{ $errors->has('kegiatan_id')?' has-error':'' }}">
        {{ Form::label('kegiatan_id', 'Kegiatan', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::select('kegiatan_id', $kegiatans, $pekerjaan->kegiatan_id, ['placeholder' => 'Pilih Kegiatan...', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('before_id')?' has-error':'' }}">
        {{ Form::label('before_id', 'Pekerjaan Sebelumnya', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::select('before_id', $pekerjaans, $pekerjaan->before_id, ['placeholder' => 'Pilih Pekerjaan Sebelumnya...', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('nama')?' has-error':'' }}">
        {{ Form::label('nama', 'Nama Pekerjaan', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::text('nama', $value=$pekerjaan->nama, $attributes=array('class' => 'form-control', 'placeholder'=>'Nama Pekerjaan...')) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('tgl_mulai')?' has-error':'' }}">
        {{ Form::label('tgl_mulai', 'Tanggal Mulai', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-3 ">
            <div class="input-group date datetimepicker">
            <span class="input-group-addon cursor"><i class="fa fa-calendar"></i></span>
            {{ Form::text('tgl_mulai', $value=$pekerjaan->tgl_mulai, ['placeholder' => 'Tanggal Mulai...', 'class'=>'form-control']) }}
            </div>
        </div>
    </div>
    <div class="form-group{{ $errors->has('tgl_selesai')?' has-error':'' }}">
        {{ Form::label('tgl_selesai', 'Tanggal Selesai', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-3">
            <div class="input-group date datetimepicker">
            <span class="input-group-addon cursor"><i class="fa fa-calendar"></i></span>
            {{ Form::text('tgl_selesai', $value=$pekerjaan->tgl_selesai, ['placeholder' => 'Tanggal Selesai...', 'class'=>'form-control']) }}
            </div>
        </div>
    </div>
    <div class="form-group{{ $errors->has('unit_target_id')?' has-error':'' }}">
        {{ Form::label('unit_target_id', 'Satuan Target', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::select('unit_target_id', $unit_targets, $pekerjaan->unit_target_id, ['placeholder' => 'Pilih Satuan Target...', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('jumlah_target')?' has-error':'' }}">
        {{ Form::label('jumlah_target', 'Jumlah Target', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::text('jumlah_target', $value=$pekerjaan->jumlah_target, ['placeholder' => 'Jumlah Target...', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group{{ $errors->has('keterangan')?' has-error':'' }}">
        {{ Form::label('keterangan', 'Keterangan', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-8">
            {{ Form::textarea('keterangan', $value=$pekerjaan->keterangan, ['placeholder' => 'Keterangan...', 'class'=>'form-control']) }}
        </div>
    </div>
   
    <div class="form-group">
        <label class="col-lg-2"></label>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-info btn-gradient dark btn-block">Simpan</button>
        </div>
    </div>