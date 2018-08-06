<?php
/**
 * Handler interface
 * @package lib-esub
 * @version 0.0.1
 */

namespace LibEsub\Iface;

interface Handler
{
    public function get(int $rpp=12, int $page=1): object;
    public function addMember(string $email, string $fname=null, string $lname=null): ?object;
    public function getMember(string $email): ?object;
    public function removeMember(string $email): bool;
    public function lastError(): ?string;
}