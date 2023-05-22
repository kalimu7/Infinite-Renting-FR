{{-- user info and avatar --}}
<div>
    <img src="/images/{{ Auth::user()->profile_photo_path }}" class="rounded-circle me-2" width="90px" alt="" srcset="">
</div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
    <a href="#" class="danger delete-conversation">Delete Conversation</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title"><span>Shared Photos</span></p>
    <div class="shared-photos-list"></div>
</div>
