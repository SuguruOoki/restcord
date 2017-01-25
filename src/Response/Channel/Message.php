<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Response\Channel;

/**
 * Message Response class.
 */
class Message
{
    /**
     * @var array Any attached files
     */
    public $attachments;

    /**
     * @var array The author of this message (the author of a message is not guaranteed to be a user*)
     */
    public $author;

    /**
     * @var int Id of the channel the message was sent in
     */
    public $channel_id;

    /**
     * @var string Contents of the message
     */
    public $content;

    /**
     * @var int|null When this message was edited (or null if never)
     */
    public $edited_timestamp;

    /**
     * @var array Any embedded content
     */
    public $embeds;

    /**
     * @var int Id of the message
     */
    public $id;

    /**
     * @var bool Whether this message mentions everyone
     */
    public $mention_everyone;

    /**
     * @var array Roles specifically mentioned in this message
     */
    public $mention_roles;

    /**
     * @var array Users specifically mentioned in the message
     */
    public $mentions;

    /**
     * @var int|null Used for validating a message was sent
     */
    public $nonce;

    /**
     * @var bool Whether this message is pinned
     */
    public $pinned;

    /**
     * @var array Reactions to the message
     */
    public $reactions;

    /**
     * @var int When this message was sent
     */
    public $timestamp;

    /**
     * @var bool Whether this was a TTS message
     */
    public $tts;

    /**
     * @var string If the message is generated by a webhook, this is the webhook's id
     */
    public $webhook_id;
}
