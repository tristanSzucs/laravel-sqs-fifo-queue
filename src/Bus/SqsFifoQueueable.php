<?php

namespace ShiftOneLabs\LaravelSqsFifoQueue\Bus;

trait SqsFifoQueueable
{
    /**
     * The message group id the job should be sent to.
     *
     * @var string
     */
    public $messageGroupId;

    /**
     * The deduplication method to use for the job.
     *
     * @var string
     */
    public $deduplicator;

    /**
     * Set the desired message group id for the job.
     *
     * @param  string  $messageGroupId
     *
     * @return $this
     */
    public function onMessageGroup($messageGroupId)
    {
        $this->messageGroupId = $messageGroupId;

        return $this;
    }


    /**
     * Remove the deduplication method from the job.
     *
     * @return $this
     */
    public function withoutDeduplicator()
    {
        return $this->withDeduplicator('');
    }
}
