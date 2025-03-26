<?php

class Ticket {
    private int $id;
    private string $name;
    private string $customer;
    private string $employe;
    private string $status;
    private string $priority;

    public function __construct(int $id, string $name, string $customer, string $employe, string $status, string $priority) {
        $this->id = $id;
        $this->name = $name;
        $this->customer = $customer;
        $this->employe = $employe;
        $this->status = $status;
        $this->priority = $priority;
    }

    // Getters
    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getCustomer(): string { return $this->customer; }
    public function getEmploye(): string { return $this->employe; }
    public function getStatus(): string { return $this->status; }
    public function getPriority(): string { return $this->priority; }

    // Setters
    public function setName(string $name): void { $this->name = $name; }
    public function setCustomer(string $customer): void { $this->customer = $customer; }
    public function setEmploye(string $employe): void { $this->employe = $employe; }
    public function setStatus(string $status): void { $this->status = $status; }
    public function setPriority(string $priority): void { $this->priority = $priority; }

    // Hydrate from array
    public static function fromArray(array $data): self {
        return new self(
            $data['id'] ?? 0,
            $data['name'] ?? '',
            $data['customer'] ?? '',
            $data['employe'] ?? '',
            $data['status'] ?? '',
            $data['priority'] ?? ''
        );
    }

    // Convert to array
    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'customer' => $this->customer,
            'employe' => $this->employe,
            'status' => $this->status,
            'priority' => $this->priority
        ];
    }
}
